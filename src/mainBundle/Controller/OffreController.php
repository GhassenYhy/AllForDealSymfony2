<?php
namespace mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use mainBundle\Entity\Produit;
use mainBundle\Entity\Service;
use mainBundle\Entity\CategorieProduit;
use mainBundle\Entity\CategorieService;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OffreController
 *
 * @author Aiden
 */
class OffreController extends Controller {
    //put your code here
    
    public function ajouterProduitAction()
    {   $session = new Session();
        $session->start();
        $session->set('x', 1);

        $em=$this->getDoctrine()->getManager();
        $categories=$em->getRepository('mainBundle:CategorieProduit')->findAll();
        return $this->render('mainBundle:Offre:ajouterProduit.html.twig',array('categories'=>$categories));
    }
    public function supprimerProduitAction()
    { $session = new Session();
        $session->start();
        $session->set('x', 3);
        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('mainBundle:Produit')->findByIdmembre(1);
    return $this->render('mainBundle:Offre:supprimerProduit.html.twig',array('produits'=>$produits));
    
    }
     public function afficherProduitAction()
    { $session = new Session();
        $session->start();
        $session->set('x', 4);
        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('mainBundle:Produit')->findByIdmembre(1);
    return $this->render('mainBundle:Offre:afficherProduit.html.twig',array('produits'=>$produits));
    
    }
    public function afficherServiceAction()
    { $session = new Session();
        $session->start();
        $session->set('x', 8);
        $em=$this->getDoctrine()->getManager();
        $services=$em->getRepository('mainBundle:Service')->findByIdmembre(1);
    return $this->render('mainBundle:Offre:afficherService.html.twig',array('services'=>$services));
    
    }
       public function supprimerServiceAction()
    { $session = new Session();
        $session->start();
        $session->set('x', 7);
        $em=$this->getDoctrine()->getManager();
        $services=$em->getRepository('mainBundle:Service')->findByIdmembre(1);
    return $this->render('mainBundle:Offre:supprimerService.html.twig',array('services'=>$services));
    
    }
    
    public function modifierProduitAction()
    { $session = new Session();
        $session->start();
        $session->set('x', 2);
        $em=$this->getDoctrine()->getManager();
        $categories=$em->getRepository('mainBundle:CategorieProduit')->findAll();
        $produits=$em->getRepository('mainBundle:Produit')->findByIdmembre(1);
        return $this->render('mainBundle:Offre:modifierProduit.html.twig',array('categories'=>$categories,'produits'=>$produits));
    }
    
    public function ajouterServiceAction()
    { $session = new Session();
        $session->start();
        $session->set('x', 5);
        $em=$this->getDoctrine()->getManager();
        $categories=$em->getRepository('mainBundle:CategorieService')->findAll();
        return $this->render('mainBundle:Offre:ajouterService.html.twig',array('categories'=>$categories));
    }
    
    public function modifierServiceAction()
    { $session = new Session();
        $session->start();
        $session->set('x', 6);
        $em=$this->getDoctrine()->getManager();
        $categories=$em->getRepository('mainBundle:CategorieService')->findAll();
        $services=$em->getRepository('mainBundle:Service')->findByIdmembre(1);
        return $this->render('mainBundle:Offre:modifierService.html.twig',array('categories'=>$categories,'services'=>$services));
    }
    public function ajouterPAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $produit=new Produit();
        $produit->setLibelle($request->request->get('nom'));
        $produit->setDescription($request->request->get('description'));
        $produit->setImage($request->request->get('image'));
        $produit->setPrix($request->request->get('prix'));
        $produit->setDate(new \DateTime());
        $produit->setIdmembre(1);
        $produit->setIdcategorie($request->request->get('categorie'));
        $produit->setEtat("enAttente");
        $produit->setNbVente(0);
        $em->persist($produit);
        $em->flush();
        
        return $this->render('mainBundle:Offre:ajoutsucc.html.twig',array('r'=>1));
    }
    
     public function modifierPAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $produit= $em->getRepository('mainBundle:Produit')->find($request->request->get('produits'));
        $produit->setLibelle($request->request->get('nom'));
        $produit->setDescription($request->request->get('description'));
        $produit->setImage($request->request->get('image'));
        $produit->setPrix($request->request->get('prix'));
        $produit->setDate(new \DateTime());
        $produit->setIdmembre(1);
        $produit->setIdcategorie($request->request->get('categorie'));
        $produit->setEtat("enAttente");
        $produit->setNbVente(0);
        $em->flush();
        
        return $this->render('mainBundle:Offre:ajoutsucc.html.twig',array('r'=>2));
    }
    
      public function supprimerPAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $produit= $em->getRepository('mainBundle:Produit')->find($request->request->get('produits'));
        $em->remove($produit);
        $em->flush();
        
        return $this->render('mainBundle:Offre:ajoutsucc.html.twig',array('r'=>3));
    }
    
    public function supprimerSAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $service= $em->getRepository('mainBundle:Service')->find($request->request->get('services'));
        $em->remove($service);
        $em->flush();
        
        return $this->render('mainBundle:Offre:ajoutsucc.html.twig',array('r'=>6));
    }
    
    public function ajouterSAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $service=new Service();
        $service->setLibelle($request->request->get('nom'));
        $service->setDescription($request->request->get('description'));
        
       
        $service->setDate(new \DateTime());
        $service->setIdmembre(1);
        $service->setIdcategorie($request->request->get('categorie'));
        
        
       
        $em->persist($service);
        $em->flush();
        
        return $this->render('mainBundle:Offre:ajoutsucc.html.twig',array('r'=>4));
    }
    public function modifierSAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $service= $em->getRepository('mainBundle:Service')->find($request->request->get('services'));
        $service->setLibelle($request->request->get('nom'));
        $service->setDescription($request->request->get('description'));
        
       
        $service->setDate(new \DateTime());
        $service->setIdmembre(1);
        $service->setIdcategorie($request->request->get('categorie'));
  
        $em->flush();
        
        return $this->render('mainBundle:Offre:ajoutsucc.html.twig',array('r'=>5));
    }
}
