<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 11/05/2018
 * Time: 19:25
 */

namespace SAM\AdminBundle\Controller;


use SAM\CoreBundle\Entity\FollowProject;
use SAM\CoreBundle\Form\FollowProjectType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FollowProjectController extends Controller
{
    public function followAction(Request $request)
    {
        $followProject = new FollowProject();
        $form = $this->get('form.factory')->create(FollowProjectType::class, $followProject);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($followProject);
            $em->flush();
            $this->addFlash('notice', 'Le répository a bien été enregistré.');
            return $this->redirectToRoute('sam_admin_homepage');
        }
        return $this->render('SAMAdminBundle:Core:follow.html.twig', ['form' => $form->createView()]);
    }
}