<?php

namespace mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use mainBundle\Entity\Produit;
use mainBundle\Entity\Service;
use mainBundle\Entity\CategorieService;
use mainBundle\Entity\CategorieProduit;
use Doctrine\Common\Collections\ArrayCollection;



class AccueilController extends Controller
{
    
     public function accueilAction()
    {
         
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('mainBundle:Produit')->findAll();
        $services = $em->getRepository('mainBundle:Service')->findAll();
        $cservices = $em->getRepository('mainBundle:CategorieService')->findAll();
        $cproduits = $em->getRepository('mainBundle:CategorieProduit')->findAll();
        $nbproduits = $em->getRepository('mainBundle:Produit')->myFindByNbVente();
        $nbcp = new ArrayCollection();
        $i = 0;
        foreach ($cproduits as $cp)
        { $ct  = $em->getRepository('mainBundle:Produit')->findByIdcategorie($cp->getId());
        $nbcp[$i] =  sizeof($ct);
        $i = $i +1; }
        $i = 0;
         foreach ($cservices as $cs)
        { $ct  = $em->getRepository('mainBundle:Service')->findByIdcategorie($cs->getId());
        $nbcs[$i] =  sizeof($ct);
        $i = $i +1; }
        return $this->render('mainBundle:Default:index.html.twig', array('produits' => $produits,'services'=>$services,'cservices'=>$cservices,'cproduits'=>$cproduits,'nbproduits'=>$nbproduits,'nbcp'=>$nbcp,'nbcs'=>$nbcs));
    }
    
    
     public function filtreAction(Request $req)
    {  $session = new Session();
       $session->start();
       $page = 1;
      
     $session->set('libelle', $req->request->get('search'));
     $session->set('type', $req->request->get('type'));
     $session->set('prixmin',0);
     $session->set('prixmax',100000);
     $session->set('gouvernorat','Tunis');
     if ($req->request->get('type')== "1")
     {$session->set('cat', $req->request->get('catp'));
          if ($req->request->get('prixmin')!="")
          { $session->set('prixmin',floatval($req->request->get('prixmin')));}
          if ($req->request->get('prixmax')!="")
          {$session->set('prixmax', floatval($req->request->get('prixmax')));}
     }
     
     else 
     {$session->set('cat', $req->request->get('cats'));
     $session->set('gouvernorat', $req->request->get('gouvernorat'));
     }

     $session->set('datemin', new \DateTime($req->request->get('datemin')));
     $session->set('datemax', new \DateTime($req->request->get('datemax')));
   
   
     $libelle = $session->get('libelle');
     $type = $session->get('type');
     $datemin = $session->get('datemin');
     $datemax = $session->get('datemax');
     $cat = $session->get('cat');
       $pages = 0 ;
        $em = $this->getDoctrine()->getManager();
        $nbproduits = $em->getRepository('mainBundle:Produit')->myFindByNbVente();
        
            $prixmin = $session->get('prixmin');
            $prixmax = $session->get('prixmax');
            
      
     
        $gouvernorat = $session->get('gouvernorat');
        if ($cat != 0)
        {$produitss = $em->getRepository('mainBundle:Produit')->myFiltreFindProduit($libelle,$cat,$datemin,$datemax,$prixmin,$prixmax);
        $produits = $em->getRepository('mainBundle:Produit')->myFiltreFindProduitMax($libelle,$cat,$datemin,$datemax,$prixmin,$prixmax,$pages);
        $servicess = $em->getRepository('mainBundle:Service')->myFiltreFindService($libelle,$cat,$datemin,$datemax,$gouvernorat);
        $services = $em->getRepository('mainBundle:Service')->myFiltreFindServiceMax($libelle,$cat,$datemin,$datemax,$gouvernorat,$pages);
        }
        
        
        else {$produitss = $em->getRepository('mainBundle:Produit')->myFiltreFindProduitAll($libelle,$datemin,$datemax,$prixmin,$prixmax);
        $produits = $em->getRepository('mainBundle:Produit')->myFiltreFindProduitMaxAll($libelle,$datemin,$datemax,$prixmin,$prixmax,$pages);
         $servicess = $em->getRepository('mainBundle:Service')->myFiltreFindServiceAll($libelle,$datemin,$datemax,$gouvernorat);
        $services = $em->getRepository('mainBundle:Service')->myFiltreFindServiceMaxAll($libelle,$datemin,$datemax,$gouvernorat,$pages);
        }
      
        
        
        
        $catp = $em->getRepository('mainBundle:CategorieProduit')->findAll();
        $cats = $em->getRepository('mainBundle:CategorieService')->findAll();
         
        
    
       
        
        if ($req->request->get('type')== "1")
        {return $this->render('mainBundle:Default:products.html.twig', array('produits' => $produits,'produitss'=> $produitss,'nbproduits'=>$nbproduits,'catp'=>$catp,'cats'=>$cats,'pages'=>$page,'libelle'=>$libelle,'type'=>1));}
          return $this->render('mainBundle:Default:services.html.twig', array('services' => $services,'servicess'=> $servicess,'nbproduits'=>$nbproduits,'catp'=>$catp,'cats'=>$cats,'pages'=>$page,'libelle'=>$libelle,'type'=>1));
    }
    
      public function rechercheNameProduitAction(Request $req)
    {  $session = new Session();
       $session->start();
       $page = 1;
   
     $session->set('libelle', $req->request->get('search'));
     $libelle = $session->get('libelle');
      

    
      
        $em = $this->getDoctrine()->getManager();
        $nbproduits = $em->getRepository('mainBundle:Produit')->myFindByNbVente();
        $produitss = $em->getRepository('mainBundle:Produit')->myFindByLibelle($libelle);
        $servicess = $em->getRepository('mainBundle:Service')->myFindByLibelle($libelle);
        $catp = $em->getRepository('mainBundle:CategorieProduit')->findAll();
        $cats = $em->getRepository('mainBundle:CategorieService')->findAll();
         
           $pages = 0 ;
    
        $produits = $em->getRepository('mainBundle:Produit')->myFindByLibelleMax($libelle,$pages);
        $services = $em->getRepository('mainBundle:Service')->myFindByLibelleMax($libelle,$pages);
        
        if ($req->request->get('type')== "0")
        {return $this->render('mainBundle:Default:products.html.twig', array('produits' => $produits,'produitss'=> $produitss,'nbproduits'=>$nbproduits,'catp'=>$catp,'cats'=>$cats,'pages'=>$page,'libelle'=>$libelle,'type'=>1));}
          return $this->render('mainBundle:Default:services.html.twig', array('services' => $services,'servicess'=> $servicess,'nbproduits'=>$nbproduits,'catp'=>$catp,'cats'=>$cats,'pages'=>$page,'libelle'=>$libelle,'type'=>1));
    }
    
         public function rechercheNameProduit2Action($page)
    {  $session = new Session();
       $session->start();
     $libelle = $session->get('libelle');
    
      

    
       
        $em = $this->getDoctrine()->getManager();
              $nbproduits = $em->getRepository('mainBundle:Produit')->myFindByNbVente();
        $produitss = $em->getRepository('mainBundle:Produit')->myFindByLibelle($libelle);
        $catp = $em->getRepository('mainBundle:CategorieProduit')->findAll();
        $cats = $em->getRepository('mainBundle:CategorieService')->findAll();
             if ((count($produitss)>=($page-1) * 6 )&&($page>0))
        {   $pages = ($page-1) * 6 ;}
        else {   return $this->render('mainBundle:Default:login.html.twig');}
        $produits = $em->getRepository('mainBundle:Produit')->myFindByLibelleMax($libelle,$pages);
        return $this->render('mainBundle:Default:products.html.twig', array('produits' => $produits,'produitss'=> $produitss,'nbproduits'=>$nbproduits,'catp'=>$catp,'cats'=>$cats,'pages'=>$page,'libelle'=>$libelle,'type'=>1));
    }
    
         public function rechercheNameProduit3Action($page)
    {  $session = new Session();
       $session->start();
     $libelle = $session->get('libelle');
      

    
        
        $em = $this->getDoctrine()->getManager();
              $nbproduits = $em->getRepository('mainBundle:Produit')->myFindByNbVente();
        $servicess = $em->getRepository('mainBundle:Service')->myFindByLibelle($libelle);
          $catp = $em->getRepository('mainBundle:CategorieProduit')->findAll();
        $cats = $em->getRepository('mainBundle:CategorieService')->findAll();
             if ((count($servicess)>=($page-1) * 6 )&&($page>0))
        {   $pages = ($page-1) * 6 ;}
        else {   return $this->render('mainBundle:Default:login.html.twig');}
        $services = $em->getRepository('mainBundle:Service')->myFindByLibelleMax($libelle,$pages);
        return $this->render('mainBundle:Default:services.html.twig', array('services' => $services,'servicess'=> $servicess,'nbproduits'=>$nbproduits,'catp'=>$catp,'cats'=>$cats,'pages'=>$page,'libelle'=>$libelle,'type'=>1));
    }
    
       public function productsAction($categorie ,$page)
    {

 

        $em = $this->getDoctrine()->getManager();
        $nbproduits = $em->getRepository('mainBundle:Produit')->myFindByNbVente();
        $categorieobject =  $em->getRepository('mainBundle:CategorieProduit')->findByLibelle($categorie);
        $produitss = $em->getRepository('mainBundle:Produit')->myFindByCategorie($categorieobject[0]->getId());
        $catp = $em->getRepository('mainBundle:CategorieProduit')->findAll();
        $cats = $em->getRepository('mainBundle:CategorieService')->findAll();
        if ((count($produitss)>=($page-1) * 6 )&&($page>0))
        {   $pages = ($page-1) * 6 ;}
        else {   return $this->render('mainBundle:Default:login.html.twig');}
        $produits = $em->getRepository('mainBundle:Produit')->myFindByCategorie($categorieobject[0]->getId(),$pages);
        return $this->render('mainBundle:Default:products.html.twig', array('produits' => $produits,'produitss'=> $produitss,'nbproduits'=>$nbproduits,'catp'=>$catp,'cats'=>$cats,'pages'=>$page,'categorie'=>$categorie,'type'=>2));
    }
    
         public function servicesAction($categorie ,$page)
    {

 

        $em = $this->getDoctrine()->getManager();
         $nbproduits = $em->getRepository('mainBundle:Produit')->myFindByNbVente();
        $categorieobject =  $em->getRepository('mainBundle:CategorieService')->findByLibelle($categorie);
        $servicess = $em->getRepository('mainBundle:Service')->myFindByCategorie($categorieobject[0]->getId());
        $catp = $em->getRepository('mainBundle:CategorieProduit')->findAll();
        $cats = $em->getRepository('mainBundle:CategorieService')->findAll();
        if ((count($servicess)>=($page-1) * 6 )&&($page>0))
        {   $pages = ($page-1) * 6 ;}
        else {   return $this->render('mainBundle:Default:login.html.twig');}
        $services = $em->getRepository('mainBundle:Service')->myFindByCategorie($categorieobject[0]->getId(),$pages);
        return $this->render('mainBundle:Default:services.html.twig', array('services' => $services,'servicess'=> $servicess,'nbproduits'=>$nbproduits,'catp'=>$catp,'cats'=>$cats,'pages'=>$page,'categorie'=>$categorie,'type'=>2));
    }
    

}
