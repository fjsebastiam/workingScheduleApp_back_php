<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController{
    /**
    * @Route("/library/list")  , name ="library_list"  
    */
    public function list(){
        $response = new JsonResponse();
        $response ->setData([
            'succes' => true,
            'data' =>[
                [
                    'id' => 1,
                    'title'=> 'Buscando entre las olas'
                ],
                [
                    'id' => 2,
                    'title'=> 'Soledad en forma de viento'
                ],
            ]
        ]);
        return $response;
    }
}