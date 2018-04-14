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
use SAM\PortfolioBundle\Form\CertificationType;
use SAM\PortfolioBundle\Form\ProjectType;
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

    public function addProjectAction(Request $request)
    {
        $project = new Project();
        $form   = $this->get('form.factory')->create(ProjectType::class, $project);
        return $this->render('SAMAdminBundle:Core:project.html.twig', ['form' => $form->createView()]);
    }

    public function addCertifAction(Request $request)
    {
        $certif = new Certification();
        $form   = $this->get('form.factory')->create(CertificationType::class, $certif);
        return $this->render('SAMAdminBundle:Core:certification.html.twig', ['form' => $form->createView()]);
    }
}