    
SwiftMailer
---

    Il faut ajouter cette dans streamBuffer.php (vendor/swiftmailer/lib/classes/swift/transport)
    
    $options = array_merge($options, array('ssl' => array('allow_self_signed' => true, 'verify_peer' => false)));
    
    A jour d'aujourd'hui, on ne peut plus créé de mot de passe d'application, il faut juste autoriser les applications
    les moins sécuriser sur google
    https://myaccount.google.com/lesssecureapps
    
    Cette addresse m'a fait trouvé la solution
    https://productforums.google.com/forum/#!topic/gmail/yltIN9_uycM
    
Au cas ou je met la config
    
    #config_dev.yml
    swiftmailer:
        transport: gmail
        username:  '%mailer_user%'
        password:  '%mailer_password%'
        port: 465
        
    #parameter.yml   
        mailer_transport: gmail
        mailer_host: 127.0.0.1
        mailer_user: email
        mailer_password: mdp
    
    #config.yml    
        swiftmailer:
            transport: '%mailer_transport%'
            host: '%mailer_host%'
            username: '%mailer_user%'
            password: '%mailer_password%'
            spool: { type: memory }
            
Mes fonctions dans le controller

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
                ->setUsername('email')
                ->setPassword('mdp');
    
            $mailer = \Swift_Mailer::newInstance($transport);
            $message = \Swift_Message::newInstance('Our Code World Newsletter')
                ->setFrom(array('samakunchan@gmail.com' => 'Our Code World'))
                ->setTo(array("samakunchan@gmail.com" => "samakunchan@gmail.com"))
                ->setBody("<h1>Welcome</h1>", 'text/html');
            $result = $mailer->send($message);
        }