<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PinRepository;
use App\Entity\Pin;


class PinController extends AbstractController
{
    /**
     * @Route("/pins", name="app_home")
     */
    public function index(PinRepository $pinRepository )
    
    {
        $pins=$pinRepository->findBy([],['createdAt'=>'DESC']);
        return $this->render('pin/index.html.twig', compact('pins'));
    }

    
    /**
     * @Route("/pins/{id<[0-9]>}", name="app_pin_show")
     */
    public function show(Pin $pin )
    
    {
   return $this->render('pin/show.html.twig', compact('pin'));
    }
}
