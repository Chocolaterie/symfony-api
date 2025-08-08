<?php

namespace App\Controller\Api\ArticleController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class ArticleController extends AbstractController
{
    #[Route('/api/articles', name: 'app_api_articles')]
    public function index(): JsonResponse
    {
        $articles = [
            [
                'id' => 1,
                'title' => 'The Thing',
                'description' => 'Pour les enfants',
            ],
            [
                'id' => 2,
                'title' => 'Les teletubbies',
                'description' => 'Un film d\'horreur avec un soleil qui parle',
            ],
            [
                'id' => 3,
                'title' => 'Les stagiaires de l\'ENI',
                'description' => 'Un film d\'horreur, des stagiaires deviennent foux et met le feu aux etablissement à cause de Android Studio',
            ],
        ];

        return $this->json($articles);
    }
}
