<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 13/04/2018
 * Time: 22:40
 */

namespace SAM\CoreBundle\Controller;

use SAM\CoreBundle\Entity\Contact;
use SAM\CoreBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function indexAction()
    {
        $repo = 'SamakunchanWebsite';
        $connection  = $this->container->get('sama_core.twitter');
        $connection->get("account/verify_credentials");
        $statuses = $connection->get("statuses/user_timeline", ["count" => 4, "exclude_replies" => false, 'tweet_mode'=>'extended']);
        return $this->render('SAMCoreBundle:Core:home.html.twig', ['statuses' => $statuses, 'apiUrl'=> 'https://api.github.com/repos/samakunchan/'.$repo.'/commits']);
    }

    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form   = $this->get('form.factory')->create(ContactType::class, $contact);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $this->sendEMail($form->getData());
        }

        return $this->render('SAMCoreBundle:Core:contact.html.twig', ['form' => $form->createView()]);
    }

    private function sendEmail($data){
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
            ->setUsername('samakunchan@gmail.com')
            ->setPassword('lesdieux974');

        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Samakunchan Website')
            ->setFrom(array($data->getEmail() => $data->getSubject()))
            ->setTo(array("samakunchan@gmail.com" => "samakunchan@gmail.com"))
            ->setBody($data->getMessage(), 'text/html');
        $result = $mailer->send($message);
    }
}

