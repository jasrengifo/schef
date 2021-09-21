<?php

namespace App\Controller;
use App\Entity\Recipe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewRecipesController extends AbstractController
{
    /**
     * @Route("/view/recipes", name="view_recipes")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $recetas = $em->getRepository(Recipe::class)->getAllRecipes();
        return $this->render('view_recipes/index.html.twig', [
            'controller_name' => 'ViewRecipesController',
            'name' => 'Recetas',
            'recetas' => $recetas,
            'receta' => $receta
        ]);
    }
}
