<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Greeter;

class HelloController extends AbstractController{
    // function hello(Request $request){
    
    //     $params =$request->query->all();
    //     $string = "Les paramètres sont : <br/>";
    //     foreach($params as $key => $value){
    //         $string= $string . '-' . $key .':' .$value . '<br/>';
    //         return new Response($string);
    //     }

    // }


    
    //function hello(){
        /* $title = "utilisateurs";
        $users = ["Mickey","Leo","Donnie","Raph"];
        return $this->render('hello.html.twig',
        ['title' =>$title,'array'=>$users]);  
        
        }*/
    


    /**
    * @Route("hello/{param}", requirements={"param"="\d+"}, methods={"GET"})
    */
    /* function helloNumber($param){
        return new Response('Hello : number ' .$param);
    } */
    /**
    * @Route("hello/{param}")
    */
    /* function helloDefault($param){
        
        return new Response('Hello !' .$param);
    } */
    




    /**
    * @Route("hello")
    */
    /* function hello(){
        return $this->render('hello.html.twig');
    } */

    /**
    * @Route("hello/{name}", name="helloWithName")
    */
    /* function helloWithName($name){
        return new Response('Hello ' . $name);
    } */




    /**
    * @Route("hello/{_locale}")
    */
    /* function hello(Request $request){
        $locale=$request->getLocale();
        return new Response('Hello, locale : ' . $locale);
    } */









    /**
     * @Route("hello")
     */
    function hello(Greeter $greeter){
        $message = $greeter->greet();
        return new Response($message);

    }
}