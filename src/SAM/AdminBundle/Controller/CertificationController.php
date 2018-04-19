<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 20/04/2018
 * Time: 01:23
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
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CertificationController extends Controller
{

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function addCertifAction(Request $request)
    {
        $certif = new Certification();
        $form   = $this->get('form.factory')->create(CertificationType::class, $certif);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($certif);
            $em->flush();
            $this->addFlash('notice', 'Certification enregistrée.');
            return $this->redirectToRoute('sam_admin_homepage');
        }
        return $this->render('SAMAdminBundle:Core:certification.html.twig', ['form' => $form->createView()]);
    }
}