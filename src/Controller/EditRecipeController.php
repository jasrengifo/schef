<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditRecipeController extends AbstractController
{
    /**
     * @Route("/edit/recipe/{id_recipe}", name="edit_recipe")
     */
    public function index(): Response
    {
        return $this->render('edit_recipe/index.html.twig', [
            'controller_name' => 'EditRecipeController',
        ]);
    }
}
