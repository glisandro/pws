<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ResourceController extends Controller
{
    /**
     * @Route("/resources", name="resources")
     */
    public function index()
    {
        $fontawesome = $this->getDoctrine()
            ->getRepository('App:Resource')
            ->findByType('fontawesome');

        $cheatsheets = $this->getDoctrine()
            ->getRepository('App:Resource')
            ->findByType('cheatsheet');

        $others = $this->getDoctrine()
            ->getRepository('App:Resource')
            ->findByType('other');
        // replace this line with your own code!
        return $this->render('Resource/resource.html.twig', compact('fontawesome','cheatsheets', 'others') );
    }
}
