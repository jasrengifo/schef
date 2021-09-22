<?php

namespace App\Controller;
use App\Entity\Recipe;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewRecipesController extends AbstractController
{
    /**
     * @Route("/view/recipes", name="view_recipes")
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $recetas_query = $em->getRepository(Recipe::class)->getAllRecipesLite();

        $pagination = $paginator->paginate(
            $recetas_query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );


        return $this->render('view_recipes/index.html.twig', [
            'controller_name' => 'ViewRecipesController',
            'name' => 'Recetas',
            'pagination' => $pagination,
            'valores' => $recetas_query->getResult()

        ]);
    }
}
