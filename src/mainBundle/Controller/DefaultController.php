<?php

namespace mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use mainBundle\Entity\Reclamation;
use mainBundle\Entity\Panier;
use mainBundle\Entity\Evaluation;
class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('mainBundle:Default:index.html.twig');
    }

    public function loginAction() {
        return $this->render('mainBundle:Default:login.html.twig');
    }

    public function registerAction() {
        return $this->render('mainBundle:Default:register.html.twig');
    }

    public function spOfferAction() {
        return $this->render('mainBundle:Default:specialOffer.html.twig');
    }

    public function contactAction() {
        return $this->render('mainBundle:Default:contact.html.twig');
    }

    public function deliveryAction() {
        return $this->render('mainBundle:Default:delivery.html.twig');
    }

    public function productsAction() {
        return $this->render('mainBundle:Default:products.html.twig');
    }

    public function productDetailsAction($id) {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('mainBundle:Produit')->find($id);
        $evaluations = $em->getRepository('mainBundle:Evaluation')->findBy(array('idproduit'=>$id));
        $rate = $em->getRepository('mainBundle:Evaluation')->findRate($id);
        return $this->render('mainBundle:Default:productDetails.html.twig', array('product' => $product,'evaluations'=>$evaluations,'rate'=>round($rate[0][1])));
    }

    public function cartAction() {
        return $this->render('mainBundle:Default:cart.html.twig');
    }

    public function forgetPassAction() {
        return $this->render('mainBundle:Default:forgetPass.html.twig');
    }

    public function compairAction() {
        return $this->render('mainBundle:Default:compair.html.twig');
    }

    public function signInAction(Request $request) {
        if ($request->request->has('submit')) {
            $em = $this->getDoctrine()->getManager();
            $login = $request->request->get('login');
            $password = $request->request->get('password');
            $membre = $em->getRepository('mainBundle:Membre')->findOneBy(
                    array('login' => $login, 'mdp' => $password)
            );
            if ($membre != null) {
                $session = new Session();
                $session->start();
                $session->set('user', $membre);
                return $this->redirectToRoute('main_homepage', array(), 301);
            }
            return new Response("fail");
        }
    }

    public function envoieReclamationAction(Request $request) {
        if ($request->request->has('submit')) {
            $em = $this->getDoctrine()->getManager();
            $reclamation = new Reclamation();
            $reclamation->setTitre($request->request->get('titre'));
            $reclamation->setDescription($request->request->get('description'));
            $reclamation->setDate(new \DateTime());
            $session = $this->getRequest()->getSession();
            $reclamation->setIdmembre(1);
//  $session->get('user')->getId()
            $em->persist($reclamation);
            $em->flush();

            $message = \Swift_Message::newInstance()
                    ->setSubject('Reclamation : ' . $request->request->get('titre'))
                    ->setFrom('ayoub.benachour@esprit.tn')
                    ->setTo('ezer.hamdi@esprit.tn')
                    ->setBody($request->request->get('description'))
            ;
            $this->get('mailer')->send($message);
            return $this->redirectToRoute('contact', array(), 301);
        }
    }

    public function payerAction() {
        $apiContext = new \PayPal\Rest\ApiContext(
                new \PayPal\Auth\OAuthTokenCredential(
                'Ae5vSWD6Yde3nmnQz0XGsi3DxEF-iZSfxet2w4OjcgPNDyh4Ak57hdSQ7VH8_45EzaigxW79iRMRuIa1', // ClientID
                'EINFGRFhRCsKNwg-7gekKOAWKv1Fz9VhPr8RYQYwuFpWltQ4GOxVsJ9hymZZTAqj-wctIZgfkj6byI9i'      // ClientSecret
                )
        );
        $payer = new \PayPal\Api\Payer();
        $payer->setPaymentMethod("paypal");

        // Specify the payment amount.
        $amount = new \PayPal\Api\Amount();
        $amount->setCurrency('USD');
        $amount->setTotal(15.00);
        $transaction = new \PayPal\Api\Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription("item 1");

        $redirectUrls = new \PayPal\Api\RedirectUrls();
        $redirectUrls->setReturnUrl('http://localhost/AllforDealWeb/web/app_dev.php/execute');
        $redirectUrls->setCancelUrl('http://localhost/AllforDealWeb/web/app_dev.php/execute');

        $payment = new \PayPal\Api\Payment();
        $payment->setRedirectUrls($redirectUrls);
        $payment->setIntent("sale");
        $payment->setPayer($payer);
        $payment->setTransactions(array($transaction));
        $payment->create($apiContext);

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == "approval_url") {
                $url = $link->getHref();
            }
        }
        //return new Response($payment->getId());
        return $this->redirect($url);
    }
    public function addCartAction($id){
        $em = $this->getDoctrine()->getManager();
        $panier = $em->getRepository('mainBundle:Panier')->findOneBy(array('idmembre'=>1,'idproduit'=>$id));
        if ($panier == null){
        $panier = new Panier();
        $panier->setIdmembre(1);
        $panier->setIdproduit($id);
        $panier->setQuantite(1);
        $em->persist($panier);
        }else {
            $panier->setQuantite($panier->getQuantite()+1);
            
        }
        $em->flush();
        return $this->redirectToRoute('cart', array(), 301);
    }
    public function executeAction(Request $request) {
        $apiContext = new \PayPal\Rest\ApiContext(
                new \PayPal\Auth\OAuthTokenCredential(
                'Ae5vSWD6Yde3nmnQz0XGsi3DxEF-iZSfxet2w4OjcgPNDyh4Ak57hdSQ7VH8_45EzaigxW79iRMRuIa1', // ClientID
                'EINFGRFhRCsKNwg-7gekKOAWKv1Fz9VhPr8RYQYwuFpWltQ4GOxVsJ9hymZZTAqj-wctIZgfkj6byI9i'      // ClientSecret
                )
        );
        $payment = \PayPal\Api\Payment::get($request->get('paymentId'), $apiContext);
        $paymentExecution = new \PayPal\Api\PaymentExecution();
        $paymentExecution->setPayerId($request->get('PayerID'));
        $payment->execute($paymentExecution, $apiContext);
        return $this->redirectToRoute('main_homepage', array(), 301);
    }
    
    public function disconnectAction(){
        
        $session = new Session();
                $session->start();
                $session->clear();
                   return $this->redirectToRoute('main_homepage', array(), 301);
    }
    public function submitEvalProdAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('mainBundle:Membre')->find(1);
        $evalution = new Evaluation();
        $rate = $request->request->get('rate');
        $commentaire = $request->request->get('commentaire');
        $evalution->setCommentaire($commentaire);
        $evalution->setEvaluation($rate);
        $evalution->setIdmembre($membre);
        $evalution->setIdproduit($id);
        $evalution->setIdservice(0);
        $date = new \DateTime("-1 hour");
        $evalution->setDate($date);
        $em->persist($evalution);
        $em->flush();
        return $this->redirectToRoute('product_details');
    }

}
