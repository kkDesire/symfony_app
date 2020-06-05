<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\HttpFoundation\Request;

use App\Service\Greeter;


class HelloController extends AbstractController {
    // /**
    //  * @Route("/hello")
    //  */
    // function hello(){
    //     return $this->render("hello.html.twig");
    // }

    // /**
    //  * @Route("hello/{name}", name="helloWithName")
    //  */
    // function helloWithName($name){
    //     return new Response('Hello ' . $name);
    // }

    // /**
    //  * @Route({
    //  *          "fr": "/bonjour",
    //  *          "en": "/hello"})
    //  */
    // function hello(Request $resquest){
    //     $locale = $resquest->getLocale();
    //     return new Response("Hello, locale : " . $locale);
    // }

    /**
     * @Route("/hello")
     */
    function hello(Greeter $greeter){
        $message = $greeter->greet();
        return new Response($message);

    }


}