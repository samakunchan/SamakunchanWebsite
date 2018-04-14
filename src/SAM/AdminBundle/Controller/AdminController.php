<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 13/04/2018
 * Time: 23:58
 */

namespace SAM\AdminBundle\Controller;

use SAM\PortfolioBundle\Entity\Certification;
use SAM\PortfolioBundle\Entity\Project;
use SAM\PortfolioBundle\Entity\Technology;
use SAM\PortfolioBundle\Form\CertificationType;
use SAM\PortfolioBundle\Form\ProjectType;
use SAM\PortfolioBundle\Form\TechnologyType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        return $this->render('SAMAdminBundle:Core:admin.html.twig');
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function addProjectAction(Request $request)
    {
        //var_dump($_POST);
        //var_dump($_POST['sam_portfoliobundle_project']['technologies']);
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

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function addCertifAction(Request $request)
    {
        $certif = new Certification();
        $form   = $this->get('form.factory')->create(CertificationType::class, $certif);
        return $this->render('SAMAdminBundle:Core:certification.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function addTechnoAction(Request $request)
    {
        $techno = new Technology();
        $form   = $this->get('form.factory')->create(TechnologyType::class, $techno);
        return $this->render('SAMAdminBundle:Core:techno.html.twig', ['form' => $form->createView()]);

    }
}