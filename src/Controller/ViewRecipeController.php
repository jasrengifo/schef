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
        $recipe = $em->getRepository(Recipe::class)->getRecipeById($id_recipe)->getSingleResult();
        $ingredients = $em->getRepository(Recipe::class)->getIngredientsByRecipeId($id_recipe)->getResult();
        $steps = $em->getRepository(Recipe::class)->getStepsByRecipeId($id_recipe)->getResult();
        return $this->render('view_recipe/index.html.twig', [
            'controller_name' => 'ViewRecipeController',
            'recipe' => $recipe,
            'ingredients' => $ingredients,
            'steps' => $steps
        ]);
    }
}
