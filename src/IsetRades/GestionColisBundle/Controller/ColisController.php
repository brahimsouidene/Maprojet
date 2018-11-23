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

use IsetRades\GestionColisBundle\Form\ColisType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IsetRades\GestionColisBundle\Entity\Colis;
use Symfony\Component\HttpFoundation\Request;

class ColisController extends Controller{
    
    //Ajout d'un colis dans la base de donnée
    public function AjoutColisAction(Request $request) {
        
       //on crée un colis
        $col=new Colis();
        
        
        //on recupere le fomulaire
        $form=$this->createForm(ColisType::class,$col);
       
        $form->handleRequest($request);
        
        //si le formulaire a ete soumis
        if($form->isSubmitted()){
            
            //on enregistre le colis en bdd
            $em=$this->getDoctrine()->getManager();
            $em->persist($col);
            $em->flush();
            echo 'ok';
            exit();
        }
                
        //on genere le html du formaulaire cree
        $formView=$form->createView();
        
        //on red la vue
        return $this->render('colisAdd.html.twig',array('form'=>$formView));
    }

  

}
