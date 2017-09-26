<?php

namespace mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use mainBundle\Entity\Panier;
use mainBundle\Entity\Produit;
use Doctrine\Common\Collections\ArrayCollection;

class PanierController extends Controller {

    public function cartAction() {
        $em = $this->getDoctrine()->getManager();

        $paniers = $em->getRepository('mainBundle:Panier')->findByIdmembre(1);
        $produits = new ArrayCollection();
        $i = 0;
        foreach ($paniers as $panier) {
            $produit = $em->getRepository('mainBundle:Produit')->find($panier->getIdproduit());
            $produits[$i] = $produit;
            $i = $i + 1;
        }
        return $this->render('mainBundle:Default:cart.html.twig', array('produits' => $produits, 'paniers' => $paniers));
    }
    public function panierRemoveAction($idmembre,$idproduit){
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('mainBundle:Panier')->findOneBy(array('idmembre'=>$idmembre,'idproduit'=>$idproduit));
        $em->remove($product);
        $em->flush();
        return $this->redirectToRoute('cart', array(), 301);
    }

}
