<?php

namespace App\Controller;

use App\Entity\Recipe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewRecipeController extends AbstractController
{
    /**
     * @Route("/view/recipe/{id_recipe}", name="view_recipe")
     */
    public function index(Request $request, $id_recipe): Response
    {
        $em = $this->getDoctrine()->getManager();
        $recetas_query = $em->getRepository(Recipe::class)->getRecipeById($id_recipe)->getSingleResult();
        return $this->render('view_recipe/index.html.twig', [
            'controller_name' => 'ViewRecipeController',
            'recipe' => $recetas_query
        ]);
    }
}
