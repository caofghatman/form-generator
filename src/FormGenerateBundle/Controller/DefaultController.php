<?php

namespace FormGenerateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormGenerateBundle:Default:index.html.twig');
    }
}
