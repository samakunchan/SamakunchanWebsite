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
        $certification = $em->getRepository('SAMPortfolioBundle:Certification')->findAll();
        $emx = $this->getDoctrine()->getManager()->getRepository('SAMPortfolioBundle:Certification');
        $web = $emx->myFindTechnologies('web');
        $html = $emx->myFindTechnologies('html');
        $js = $emx->myFindTechnologies('js');
        $php = $emx->myFindTechnologies('php');

        return $this->render('SAMPortfolioBundle:Core:portfolio.html.twig',
            [
                'projects' => $project,
                'listweb' => $web,
                'listhtml' => $html,
                'listjs' => $js,
                'listphp' => $php,
                'certifications' => $certification
            ]);
    }
}