<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ColisController
 *
 * @author ASUS
 */
namespace IsetRades\GestionColisBundle\Controller;

use IsetRades\GestionColisBundle\Form\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IsetRades\GestionColisBundle\Entity\Client;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends Controller{
    
    //Ajout d'un colis dans la base de donnée
    public function AjoutClientAction(Request $request) {
        
       //on crée un colis
        $clt=new Client();
        
        
        //on recupere le fomulaire
        $formclt=$this->createForm(ClientType::class,$clt);
       
        $formclt->handleRequest($request);
        
        //si le formulaire a ete soumis
        if($formclt->isSubmitted()){
            
            //on enregistre le colis en bdd
            $em=$this->getDoctrine()->getManager();
            $em->persist($clt);
            $em->flush();
            echo 'ok';
            exit();
        }
                
        //on genere le html du formaulaire cree
        $formView=$formclt->createView();
        
        //on red la vue
        return $this->render('clientAdd.html.twig',array('formclt'=>$formView));
    }

  

}
