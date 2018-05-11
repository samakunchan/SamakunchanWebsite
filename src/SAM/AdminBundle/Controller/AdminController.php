<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 13/04/2018
 * Time: 23:58
 */

namespace SAM\AdminBundle\Controller;

use SAM\CoreBundle\Entity\FollowProject;
use SAM\CoreBundle\Form\FollowProjectType;
use SAM\PortfolioBundle\Entity\Certification;
use SAM\PortfolioBundle\Entity\Project;
use SAM\PortfolioBundle\Entity\Technology;
use SAM\PortfolioBundle\Form\CertificationType;
use SAM\PortfolioBundle\Form\ProjectType;
use SAM\PortfolioBundle\Form\TechnologyType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdminController extends Controller
{

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $followProject = new FollowProject();
        $form = $this->get('form.factory')->create(FollowProjectType::class, $followProject);
        $em = $this->getDoctrine()->getManager();
        $projectToFollow = $em->getRepository('SAMCoreBundle:FollowProject')->findAll();
        return $this->render('SAMAdminBundle:Core:admin.html.twig', ['projectsToFollow' => $projectToFollow]);
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function addProjectAction(Request $request)
    {
        $project = new Project();
        $form   = $this->get('form.factory')->create(ProjectType::class, $project);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();

            $this->addFlash('notice', 'Projet bien enregistrée.');
            return $this->redirectToRoute('sam_admin_homepage');
        }
        return $this->render('SAMAdminBundle:Core:project.html.twig', ['form' => $form->createView()]);
    }

    public function modifyProjectAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('SAMAdminBundle:Project')->find($id);
        if ($project === null){
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

    }


}