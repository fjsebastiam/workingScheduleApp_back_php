<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController{

    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }
    /**
    * @Route("/library/list")  , name ="library_list"  
    */
    public function list(){
        $this->logger->info('Libreria');
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
                [
                    'id' => 2,
                    'title'=> $title
                ],
            ]
        ]);
        return $response;
    }
}