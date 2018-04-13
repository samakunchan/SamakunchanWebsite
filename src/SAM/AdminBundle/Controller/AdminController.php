<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 13/04/2018
 * Time: 23:58
 */

namespace SAM\AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction(Request $request)
    {
        return $this->render('SAMAdminBundle:Core:index.html.twig');
    }
}