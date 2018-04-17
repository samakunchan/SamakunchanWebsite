<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 14/04/2018
 * Time: 19:34
 */

namespace SAM\PortfolioBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortfolioController extends Controller
{
    public function portfolioAction()
    {
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('SAMPortfolioBundle:Project')->findAll();
        return $this->render('SAMPortfolioBundle:Core:portfolio.html.twig', ['projects' => $project]);
    }
}