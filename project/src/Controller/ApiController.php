<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/v1', name: 'api_base_')]
class ApiController extends AbstractController
{
    #[Route('/welcome', name: 'welcome')]
    public function welcome(): Response
    {
        dump(getenv('APP_ENV'));
        return new Response('
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title></title>
                <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>">
            
            </head>
            <body>
               <h1>Hi there</h1>
            </body>
        </html>
        ');
    }
}