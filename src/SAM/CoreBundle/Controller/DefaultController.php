<?php

namespace SAM\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SAMCoreBundle:Default:index.html.twig');
    }
}
