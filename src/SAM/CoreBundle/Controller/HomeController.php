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
        $connection  = $this->container->get('sama_core.twitter');
        $connection->get("account/verify_credentials");
        $statuses = $connection->get("statuses/user_timeline", ["count" => 2, "exclude_replies" => true, 'tweet_mode'=>'extended']);
        //var_dump($statuses[0]->entities->media);
        return $this->render('SAMCoreBundle:Core:home.html.twig', ['statuses' => $statuses]);
    }

    public function contactAction()
    {
        return $this->render('SAMCoreBundle:Core:contact.html.twig');
    }
}

