<?php

namespace PLS\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function indexAction()
    {
    	$content = $this->get('templating')->render('PLSCoreBundle:Main:index.html.twig');

        return new Response($content);
    }

    public function ratsAction()
    {

    	$content = $this->get('templating')
    					->render('PLSCoreBundle:Main:rats.html.twig', 
    						array(
    							'rats' => ['Vayne', 'Langoustine', 'Okonomiyaki', 'Fricadelle']
    						));


        return new Response($content);
    }
}
