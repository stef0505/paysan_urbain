<?php

namespace App\Controller;
use App\Entity\Page;
use App\Entity\User;
use App\Entity\Equipe;
use App\Entity\Content;
use App\Entity\Element;
use App\Entity\Recette;
use App\Form\ContactType;
use App\Entity\Entreprise;
use App\Entity\Formulaire;
use App\Entity\Micropousse;
use App\Notification\ContactNotification;
use App\Notification\ContactNotification2;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    /**
     * @Route("/page", name="page")
     */
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/", name="home_page")
     */
    public function homePage()
    {

        $route="/";

        // Récupére les villes (Entreprises Entity)
        $repoEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);
        $entreprisesPu = $repoEntreprise->findAll();

        //Récupére l'element Card
        // $repoCardHome = ;
        $cardHome = $this->getDoctrine()->getRepository(Content::class)->findBy(            
            ['name' => 'cardHomePage'],
            // ['online' => true],
            ['id' => 'ASC']
        );
        
        return $this->render('page/home-page.html.twig', [
            'controller_name' => 'PageController',
            'entreprisesPu' => $entreprisesPu,
            'cardHome' => $cardHome,
            'route' => $route

        ]);
    }

    /**
    * @Route("{nameEntreprise}/accueil", name="home_ville")
    */
    public function homeVillePage($nameEntreprise)
    {
        $route = "/accueil";
        //Nom de la page pour la BDD 
        $namePage = "homePage";
        // Récupére les villes (Entreprises Entity)
        $repoEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);
        // $entreprisesPu = $repoEntreprise->findAll();
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
            // dump($entrepriseId);
            // Récupére les membres correspondant à la ville via l'ID de la ville ($entrepriseID)
            $repo = $this->getDoctrine()->getRepository(Equipe::class);
            $membreEquipe = $repo->findBy(
                ['entreprise' => $entrepriseId]
            );
            
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
                    
                    // dump($pages[$i]->getName());
                    $namePagefound = $pages[$i]->getName();
                    
                    if ($namePagefound == $namePage) {
                        //A REVOIR si le break fonctionne avec les autres pages
                    break;
                        // dump($namePagefound);
                    }
                    // dump($namePage);
                }
                //Grace au break la dernière valeur stockée dans $namePagefound est bien le nom de la page
                // dump($namePagefound);

                //Récupére la bonne page
                $getPageByName = $repoPage->findOneBy(            
                    ['entreprise'=> $entrepriseId,'name' => $namePagefound],
                );
                $namePageId = $getPageByName->getId();
                //Je récupére le bonne ID d'aprés le Dump
                // dump($namePageId);
            // Récupére le block histoire ayant un page_id correspondant à l'Id de la page
            $blockHistoire = $this->getDoctrine()->getRepository(Content::class)->findBy(
                ['page'=> $namePageId, 'name' => 'Block-notreHistoire'],
                
            );    
            // dump($blockHistoire);
            
            // Récupére card home Ville
            $cardHomeVille = $this->getDoctrine()->getRepository(Content::class)->findBy(            
                    ['page'=> $namePageId,'name' => 'card-home-ville'],
                    ['id' => 'ASC']
            );    
            // dump($cardHomeVille);
            // dump($entreprisesPu);

        } //END_IF PAGES EXIST 
            //add Variable ville de manière dynamique 
            return $this->render('page/home-page-ville.html.twig', [
                'controller_name' => 'PageController',
                'membreEquipe'    => $membreEquipe,
                'entreprisesPu'   => $entreprisesPu,
                'blockHistoire'   => $blockHistoire,
                'cardHomeVille'   => $cardHomeVille,
                'route'           => $route,

            ]);
        } //END_ELSE_IF
        else {
            
            return $this->redirectToRoute('notOnline');
        }
    }


    /**
    * @Route("{nameEntreprise}/nos-animations", name="nos_missions")
    */
    public function missionPage($nameEntreprise)
    {
        $route = "/nos-animations";        
        //Nom de la page pour la BDD 
        $namePage = "missionPage";

        // Récupére les villes (Entreprises Entity)
        $repoEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);
        // $entreprisesPu = $repoEntreprise->findAll();
        $entreprisesPu = $repoEntreprise->findOneBy(            
            ['name' => $nameEntreprise],
        );
        
        // dump($entreprisesPu);
        
        //Check si l'entreprise exist
        if (!$entreprisesPu) {
            throw $this->createNotFoundException(
                'No Entreprise found for  '.$nameEntreprise
            );
        //Check si le site est mis online ou pas
        }elseif($entreprisesPu->getOnline() == 1){
            $entrepriseId = $entreprisesPu->getId();
            // dump($entreprisesPu);
            
            //récupére les pages selon la ville 
            $repoPage = $this->getDoctrine()->getRepository(Page::class);
            // $entreprisesPu = $repoEntreprise->findAll();
            $pages = $repoPage->findBy(            
                ['entreprise' => $entrepriseId],
            );

            //Si il y a des pages reliées à l'entreprise
            if ($pages) {
                for ($i=0; $i < count($pages) ; $i++) { 
                    
                    // dump($pages[$i]->getName());
                    $namePagefound = $pages[$i]->getName();
                    
                    if ($namePagefound == $namePage) {
                        //A REVOIR si le break fonctionne avec les autres pages
                    break;
                        // dump($namePagefound);
                    }
                    // dump($namePage);
                }
                //Grace au break la dernière valeur stockée dans $namePagefound est bien le nom de la page
                // dump($namePagefound);

                //Récupére la bonne page
                $getPageByName = $repoPage->findOneBy(            
                    ['entreprise'=> $entrepriseId,'name' => $namePagefound],
                );
                $namePageId = $getPageByName->getId();
                //Je récupére le bonne ID d'aprés le Dump
                // dump($namePageId);
                //Récupére l'element card-mission
                $cardMission = $this->getDoctrine()->getRepository(Content::class)->findBy(            
                    ['page'=> $namePageId,'name' => 'card-mission'],
                    // ['online' => true],
                    ['id' => 'ASC']
                );

                //Récupére l'element title-mission
                $titleMission = $this->getDoctrine()->getRepository(Content::class)->findBy(            
                    ['page'=> $namePageId, 'name' => 'title-mission'],
                    // ['online' => true],
                    ['id' => 'ASC']
                );
            } //END_IF si pages il y a  
        return $this->render('page/missions.html.twig', [
            'controller_name' => 'PageController',
            'entreprisesPu' => $entreprisesPu,
            'route' => $route,
            'cardMission' => $cardMission,
            'titleMission' => $titleMission
        ]);
        } //END_ELSE_IF
        else {
            
            return $this->redirectToRoute('notOnline');
        }
    }


    /**
     * @Route("{nameEntreprise}/nos-micro-pousses", name="nos_micropousses")
     */
    public function micropoussePage($nameEntreprise)
    {

        $route = "/nos-micro-pousses";
        $namePage = "micropoussePage";


        // Récupére les villes (Entreprises Entity)
        $repoEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);
        $entreprisesPu = $repoEntreprise->findOneBy(            
            ['name' => $nameEntreprise],
        );

        if (!$entreprisesPu) {
            throw $this->createNotFoundException(
                'No Entreprise found for  '.$nameEntreprise
            );
        //Check si le site est mis online ou pas
        }elseif($entreprisesPu->getOnline() == 1){
            // dump($entreprisesPu);
            $entrepriseId = $entreprisesPu->getId();
            
            //Récupére les Micropousses de la ville voulu
            $repoMicro = $this->getDoctrine()->getRepository(Micropousse::class);

            $micropousses = $repoMicro->findBy(
                ['entreprise' => $entrepriseId]
            );

            //Valeur d'initilaisation du tableau micropousse
            //A changer car ne marchera pas pour Paris
            $microdesc = $repoMicro->findOneBy(['id' => 2]);

            //Get toute les recettes
            $repoRecette = $this->getDoctrine()->getRepository(Recette::class);
            $recette = $repoRecette->findAll();
            
            //récupére les pages selon la ville 
            $repoPage = $this->getDoctrine()->getRepository(Page::class);
            // $entreprisesPu = $repoEntreprise->findAll();
            $pages = $repoPage->findBy(            
                ['entreprise' => $entrepriseId],
            );
            
            //Si il y a des pages reliées à l'entreprise
            if ($pages) {
                for ($i=0; $i < count($pages) ; $i++) { 
                    
                    // dump($pages[$i]->getName());
                    $namePagefound = $pages[$i]->getName();
                    
                    if ($namePagefound == $namePage) {
                        //A REVOIR si le break fonctionne avec les autres pages
                    break;
                        // dump($namePagefound);
                    }
                    // dump($namePage);
                }
                //Grace au break la dernière valeur stockée dans $namePagefound est bien le nom de la page
                // dump($namePagefound);

                //Récupére la bonne page
                $getPageByName = $repoPage->findOneBy(            
                    ['entreprise'=> $entrepriseId,'name' => $namePagefound],
                );
                $namePageId = $getPageByName->getId();
                    
            //Récupére l'element Title
            $titleMicro = $this->getDoctrine()->getRepository(Content::class)->findBy(            
                ['page'=> $namePageId,'name' => 'title-micropousse'],
                // ['online' => true],
                ['id' => 'ASC']
            );
            
            //Récupére l'element pour le titre du Table-micropousse
            $titleGammeMicro = $this->getDoctrine()->getRepository(Content::class)->findBy(            
                ['page'=> $namePageId,'name' => 'title-gamme-micropousse'],
                // ['online' => true],
                ['id' => 'ASC']
            );
            
            //Récupére l'element pour le block Recette
            $titleRecette = $this->getDoctrine()->getRepository(Content::class)->findBy(            
                ['page'=> $namePageId,'name' => 'title-recette'],
                // ['online' => true],
                ['id' => 'ASC']
            );


            } //END_IF si pages il y a 

            return $this->render('page/micropousse.html.twig', [
                'controller_name'   => 'PageController',
                'micropousses'      => $micropousses,
                'microdesc'         => $microdesc,
                'recette'           => $recette,
                'entreprisesPu' => $entreprisesPu,
                'route' => $route,
                'titleMicro' => $titleMicro,
                'titleGammeMicro' => $titleGammeMicro,
                'titleRecette' => $titleRecette,
    
            ]);

        } //END_ELSEIF
        else {
            
            return $this->redirectToRoute('notOnline');
        }
    }
     /**
      * @Route("/sorry", name="notOnline")
      */
     public function notOnline()
     {

        return $this->render('security/notOnline.html.twig', [
                      'controller_name' => 'PageController',
        ]);
     }
        
    //  /**
    //   * @Route("/contact", name="contact")
    //   */
    //  public function formulaire(Request $request, \Swift_Mailer $mailer)
    //  {
    //      $form = $this->createForm(ContactType::class);
    //      $form->handleRequest($request);

    //      if ($form->isSubmitted() && $form->isValid()) {

    //          $contactFormData = $form->getData();

    //          $message = (new \Swift_Message('Nouveau Message!'))
    //              ->setFrom($contactFormData['email'])
    //              ->setTo('steffada@gmail.com')
    //              ->setBody(
    //                  $contactFormData['message'],
    //                  'text/plain'
    //              )
    //          ;

    //          $mailer->send($message);

    //          $this->addFlash('success', 'Message was send');

    //          return $this->redirectToRoute('contact');
    //      }

    //      return $this->render('page/contact.html.twig', [
    //          'form' => $form->createView(),
    //      ]);

    //       return $this->render('emails/formulaire.html.twig', [
    //           'controller_name' => 'PageController'
    //       ]);
    //  }
    }
    
    
    