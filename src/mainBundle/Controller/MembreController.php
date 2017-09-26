<?php

namespace mainBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use mainBundle\Entity\Membre;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Membre controller.
 *
 * @Route("/membre")
 */
class MembreController extends Controller
{

    /**
     * Lists all Membre entities.
     *
     * @Route("/membres", name="membre")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('mainBundle:Membre')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Membre entity.
     *
     * @Route("/membre_show/{id}", name="membre_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('mainBundle:Membre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Membre entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
    
    public function ajout_membreAction(Request $requete){
       
        
        $nom = $requete->request->get('nom');
        $prenom =  $requete->request->get('prenom');
        $age =  $requete->request->get('age');
        $email =  $requete->request->get('email');
        $login =  $requete->request->get('login');
        $mdp =  $requete->request->get('pass');
        $type =  $requete->request->get('type');
        $adresse =  $requete->request->get('adresse');
        $phone =  $requete->request->get('numero');

        if ($nom != '' && $prenom != '' && $age != '' && $email != '' && $login != '' && $mdp != '' && $type != '' && $adresse != '' && $phone != '') {
            $membre = new Membre();

            
            $membre->setNom($nom);
            $membre->setPrenom($prenom);
            $membre->setAge($age);
            $membre->setEmail($email);
            $membre->setLogin($login);
            $membre->setMdp($mdp);
            $membre->setType($type);
            $membre->setAdresse($adresse);
            $membre->setNumerotel($phone);
            $membre->setBonus(0);
            $membre->setDvisite(new \DateTime('now'));
            $membre->setNbProdVendu(0);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($membre);
            $em->flush();
           return $this->render('mainBundle:Default:login.html.twig');
        }


        return $this->render('mainBundle:Default:register.html.twig');
    }
}
