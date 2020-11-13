<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PositionController extends AbstractController {
/*
    public function homepage($imageName) {
        //$file = './img/frontSide.jpg';
        //$file = "./img/" + $imageName + ".jpg";
        //$response = new BinaryFileResponse($file);
        //return $response;
    }
*/
    public function homepage() {
        return $this->render('secondary/showHouse.html.twig');
    }
    
    public function test(){
        return $this->render('secondary/test.html.twig');
    }

    public function about(){
        return $this->render('secondary/about.html.twig');
    }
}
