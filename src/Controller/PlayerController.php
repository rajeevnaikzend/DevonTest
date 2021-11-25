<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Player;
use App\Form\Type\PlayerType;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PlayerController extends AbstractApiController
{
   
    public function indexAction(Request $request): Response
    {
        $players = $this->getDoctrine()->getRepository(Player::class)->findAll();
        //var_dump($players); exit; 
        return $this->respond($players);
    }
    
    public function createAction(Request $request): Response
    {
        set_time_limit(0);
        $form = $this->buildForm(PlayerType::class);
        $form->handleRequest($request);
        if(!$form->isSubmitted() || !$form->isvalid())
        {
            return $this->respond($form, Response::HTTP_BAD_REQUEST);
        }
        
        /**@var Player $player */
        $player = $form->getData();
        $this->getDoctrine()->getManager()->persist($player);
        $this->getDoctrine()->getManager()->flush();
        
        return $this->respond($player);
    }       
}
