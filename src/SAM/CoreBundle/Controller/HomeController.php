<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 13/04/2018
 * Time: 22:40
 */

namespace SAM\CoreBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('SAMCoreBundle:Core:home.html.twig');
    }

    public function contactAction()
    {
        return $this->render('SAMCoreBundle:Core:contact.html.twig');
    }
}

