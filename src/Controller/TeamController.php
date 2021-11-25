<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Team;
use App\Form\Type\TeamType;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TeamController extends AbstractApiController
{
   
    public function indexAction(Request $request): Response
    {
        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();
        return $this->respond($teams);
    }
    
    public function createAction(Request $request): Response
    {
        set_time_limit(0);
        $form = $this->buildForm(TeamType::class);
        $form->handleRequest($request);
        if(!$form->isSubmitted() || !$form->isvalid())
        {
            return $this->respond($form, Response::HTTP_BAD_REQUEST);
        }
        
        /**@var Team $team */
        $team = $form->getData();
        $this->getDoctrine()->getManager()->persist($team);
        $this->getDoctrine()->getManager()->flush();
        
        return $this->respond($team);
    }       
}
