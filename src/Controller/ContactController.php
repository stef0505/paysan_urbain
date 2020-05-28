<?php

namespace App\Controller;

use App\Entity\Page;
use App\Entity\Content;
use App\Form\ContactType;
use App\Entity\Entreprise;
use App\Entity\Formulaire;
use App\Notification\ContactNotification;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
    * @Route("{nameEntreprise}/contact", name="contact")
    */
    public function index(Request $request, \Swift_Mailer $mailer,ContactNotification $notification, $nameEntreprise)
    {

        $route = "/contact";
        $namePage = "contactPage";
    

    $formulaire = new Formulaire();
    $form = $this->createForm(ContactType::class, $formulaire);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $notification->notify($formulaire);
        $this->addFlash('success', 'Votre message a bien été envoyé');
        
        return $this->redirect(
            $this->generateUrl(
                'contact',
                array('nameEntreprise' => $nameEntreprise)
            )
        );
        // $this->urlRedirectAction($nameEntreprise . '/contact');
    }
    
    $repoEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);
    $entreprisesPu = $repoEntreprise->findOneBy(            
        ['name' => $nameEntreprise],
    );

    //Check si l'entreprise exist
    if (!$entreprisesPu) {
        throw $this->createNotFoundException(
            'No Entreprise found for  '.$nameEntreprise
        );
    //Check si le site est mis online ou pas
    }elseif($entreprisesPu->getOnline() == 1){
        $entrepriseId = $entreprisesPu->getId();

        
        //récupére les pages selon la ville 
        $repoPage = $this->getDoctrine()->getRepository(Page::class);
        // $entreprisesPu = $repoEntreprise->findAll();
        $pages = $repoPage->findBy(            
            ['entreprise' => $entrepriseId],
        );
        
        //Si il y a des pages reliées à l'entreprise
        if ($pages) {
            //Je boucle dans ces pages pour chercher une correspondance entre 
            //le nom de la page souhaité ($namePage) et les noms des pages reliées   
            for ($i=0; $i < count($pages) ; $i++) { 
                
                //  dump($pages[$i]->getName());
                $namePagefound = $pages[$i]->getName();
                
                if ($namePagefound == $namePage) {
                    //A REVOIR si le break fonctionne avec les autres pages
                break;
                    //  dump($namePagefound);
                }
                //  dump($namePage);
            }
            //Grace au break la dernière valeur stockée dans $namePagefound est bien le nom de la page
            //  dump($namePagefound);

            //Récupére la bonne page
            $getPageByName = $repoPage->findOneBy(            
                ['entreprise'=> $entrepriseId,'name' => $namePagefound],
            );
            $namePageId = $getPageByName->getId();
            
            //Récupére l'element card-contact
            $cardContact = $this->getDoctrine()->getRepository(Content::class)->findBy(            
                ['page'=> $namePageId,'name' => 'card-contact'],
                // ['online' => true],
                ['id' => 'ASC']
            );

        } //END_IF si pages il y a 
            return $this->render('page/contact.html.twig', [
                'form' => $form->createView(),
                'entreprisesPu' => $entreprisesPu,
                'route' => $route,
                'cardContact' => $cardContact,
            ]);
        
            return $this->render('templates/formulaire.html.twig', [
                'controller_name' => 'PageController'
            ]);
    } //END_ELSE
    else {
            
        return $this->redirectToRoute('notOnline');
    }
}

//     /**
//      * @Route("/contactparis", name="contactParis")
//      */
//     public function index2(Request $request, \Swift_Mailer $mailer,ContactNotification $notification)
//     {
//         $formulaire = new Formulaire();
//     $form = $this->createForm(ContactType::class, $formulaire);
//     $form->handleRequest($request);

//     if ($form->isSubmitted() && $form->isValid()) {
//         $notification->notify($formulaire);
//         $this->addFlash('success', 'Votre message a bien été envoyé');
//         return $this->redirectToRoute('contact');
//     }
        
//     return $this->render('page/contact.html.twig', [
//         'form' => $form->createView(),
        
//     ]);

//     return $this->render('templates/formulaire.html.twig', [
//         'controller_name' => 'PageController'
//     ]);
// }

}
