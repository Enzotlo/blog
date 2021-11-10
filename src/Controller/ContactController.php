<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        return $this->render('pages/contact.html.twig', [
        ]);
    }
    /**
     * @Route("/contact/{type}", name="contactType")
     */
    public function ContactTypes(Request $request, string $type): Response
    {
        $name = $request->query->get('name');
        return $this->render('pages/contact.html.twig', [
            'name' => $name,
            'type' => $type
        ]);
    }
}
