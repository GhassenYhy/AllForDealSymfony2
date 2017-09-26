<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use mainBundle\Entity\Administrateur;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('BackOfficeBundle:Default:index.html.twig');
    }

    public function gestionProdEnAttenteAction() {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('mainBundle:Produit')->findBy(array('etat' => 'enAttente'));
        return $this->render('BackOfficeBundle:Default:gestionProduitsEnAttente.html.twig', array('products' => $products));
    }

    public function gestionProdAction() {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('mainBundle:Produit')->findAll();
        return $this->render('BackOfficeBundle:Default:gestionProduits.html.twig', array('products' => $products));
    }

    public function accepteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('mainBundle:Produit')->find($id);
        $product->setEtat('Accepte');
        $em->flush();
        return $this->redirectToRoute('gestion_produits_enAttente');
    }

    public function refuseAction($id) {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('mainBundle:Produit')->find($id);
        $product->setEtat('Refuse');
        $em->flush();
        return $this->redirectToRoute('gestion_produits_enAttente');
    }

    public function effaceProdAction($id) {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('mainBundle:Produit')->find($id);
        $em->remove($product);
        $em->flush();
        return $this->redirectToRoute('gestion_produits');
    }

    public function gestionServiceAction() {
        $em = $this->getDoctrine()->getManager();
        $services = $em->getRepository('mainBundle:Service')->findAll();
        return $this->render('BackOfficeBundle:Default:gestionServices.html.twig', array('services' => $services));
    }

    public function effaceServAction($id) {
        $em = $this->getDoctrine()->getManager();
        $service = $em->getRepository('mainBundle:Service')->find($id);
        $em->remove($service);
        $em->flush();
        return $this->redirectToRoute('gestion_services');
    }

    public function gestionAdminAction() {
        $em = $this->getDoctrine()->getManager();
        $admins = $em->getRepository('mainBundle:Administrateur')->findAll();
        return $this->render('BackOfficeBundle:Default:gestionAdmins.html.twig', array('admins' => $admins));
    }

    public function modifAdminAction(Request $request) {
        $id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $admin = $em->getRepository('mainBundle:Administrateur')->find($id);
        $login = $request->request->get('login');
        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom');
        $mdp = $request->request->get('mdp');
        if ($mdp != "")
            $admin->setMdp($mdp);
        $admin->setLogin($login);
        $admin->setNom($nom);
        $admin->setPrenom($prenom);
        $em->flush();
        return $this->redirectToRoute('gestion_admins');
    }

    public function suppAdminAction($id) {
        $em = $this->getDoctrine()->getManager();
        $admin = $em->getRepository('mainBundle:Administrateur')->find($id);
        $em->remove($admin);
        $em->flush();
        return $this->redirectToRoute('gestion_admins');
    }

    public function ajoutAdminAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $admin = new Administrateur();
        $admin->setLogin($request->request->get('login'));
        $admin->setMdp($request->request->get('mdp'));
        $admin->setNom($request->request->get('nom'));
        $admin->setPrenom($request->request->get('prenom'));
        $em->persist($admin);
        $em->flush();
        return $this->redirectToRoute('gestion_admins');
    }

    public function ajaxAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $admin = $em->getRepository('mainBundle:Administrateur')->findByLogin($request->request->get('login'));
        if ($admin == null)
            return new JsonResponse(array('message' => 'error'), 400);
        else
            return new JsonResponse(array('message' => 'success'), 200);
    }

    public function inboxAction() {
        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository('mainBundle:Reclamation')->findAll();
        return $this->render('BackOfficeBundle:Default:gestionReclamationInbox.html.twig', array('reclamations' => $reclamations));
    }

    public function voirRecAction() {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository('mainBundle:Reclamation')->findOneBy(array());
        return $this->render('BackOfficeBundle:Default:gestionReclamationVoir.html.twig', array('reclamation' => $reclamation));
    }

    public function voirReclamationAction($id) {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository('mainBundle:Reclamation')->find($id);
        return $this->render('BackOfficeBundle:Default:gestionReclamationVoir.html.twig', array('reclamation' => $reclamation));
    }

    public function repondRecAction(Request $request) {
        return $this->redirectToRoute('gestion_reclamations');
    }

    public function suppRecAction(Request $request) {
        $list = $request->request->get('check');
        $em = $this->getDoctrine()->getManager();
        foreach ($list as $id) {
            $rec = $em->getRepository('mainBundle:Reclamation')->find($id);
            $em->remove($rec);
        }
        $em->flush();
        return $this->redirectToRoute('gestion_reclamation_inbox');
    }

    public function ajaxRec1Action(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $id = $request->request->get('id');
        $rec = $em->getRepository('mainBundle:Reclamation')->findNext($id);
        $serializer = $this->container->get('serializer');
        $json = $serializer->serialize($rec, 'json');
        if ($rec == null)
            return new JsonResponse(array('message' => 'error'), 400);
        else
            return new JsonResponse(json_decode($json), 200);
    }

    public function ajaxRec2Action(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $id = $request->request->get('id');
        $rec = $em->getRepository('mainBundle:Reclamation')->findPrevious($id);
        $serializer = $this->container->get('serializer');
        $json = $serializer->serialize($rec, 'json');
        if ($rec == null)
            return new JsonResponse(array('message' => 'error'), 400);
        else
            return new JsonResponse(json_decode($json), 200);
    }

    public function gestRecAction(Request $request) {
        if ($request->request->has('supp')) {
            $em = $this->getDoctrine()->getManager();
            $id = $request->request->get('id');
            $rec = $em->getRepository('mainBundle:Reclamation')->find($id);
            $em->remove($rec);
            $em->flush();
            return $this->redirectToRoute('gestion_reclamation_voir');
        } else if ($request->request->has('repond')) {

            return $this->render('BackOfficeBundle:Default:gestionReclamationCompose.html.twig',array('email'=>$request->request->get('mail')
                    ,'subject'=>$request->request->get('subject')));
        }
    }

    public function ComposeAction(Request $request) {
        return $this->render('BackOfficeBundle:Default:gestionReclamationCompose.html.twig');
    }

    public function envoiMailAction(Request $request) {
        $message = \Swift_Message::newInstance()
                ->setSubject($request->request->get('subject'))
                ->setFrom('ayoub.benachour@esprit.tn')
                ->setTo($request->request->get('email'))
                ->setBody(
                $request->request->get('body'), 'text/html'
        );
        $this->get('mailer')->send($message);
        return $this->render('BackOfficeBundle:Default:gestionReclamationCompose.html.twig');
    }
    public function loginAction(){
        return $this->render('BackOfficeBundle::loginAdmin.html.twig');
    }
    public function signInAction(){
        return $this->redirectToRoute('back_office_homepage');
    }
    public function ajaxLoginAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $login = $request->request->get('login');
        $mdp = $request->request->get('mdp');
        $admin = $em->getRepository('mainBundle:Administrateur')->findOneBy(array('login'=>$login,'mdp'=>$mdp));
        if ($admin == null)
            return new JsonResponse(array('message' => 'error'), 400);
        else
            return new JsonResponse(array('message' => 'success'), 200);
    }
}
