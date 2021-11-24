<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\UserType;

class UserController extends AbstractController{

    /**
     * @Route("/user")
     */
    function createUserForm(Request $request){
        $user = new User();
        $form =$this->createForm(UserType::class,$user);

        $form -> handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            return new Response("Formulaire validé");
        }
        return $this->render('form.html.twig',['userForm'=>$form->createView()]);
    }
}