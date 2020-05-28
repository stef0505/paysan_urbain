<?php
namespace App\Notification;

use Twig\Environment;
use App\Entity\Contact;
use App\Entity\Formulaire;

class ContactNotification2 {

    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $renderer;

    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }

    public function notify(Formulaire $formulaire) {
        $message = (new \Swift_Message('Nouveau Message!'))
            ->setFrom('send@example.com')
            ->setTo('paysanurbainparis@gmail.com')
            ->setReplyTo($formulaire->getEmail())
            ->setBody($this->renderer->render('emails/formulaire.html.twig', [
                'formulaire' => $formulaire
            ]), 'text/html');
        $this->mailer->send($message, $fail);
    }

}
