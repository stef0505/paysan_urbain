<?php

namespace App\Controller;

use App\Entity\Page;
use App\Entity\Equipe;
use App\Entity\Content;
use App\Entity\Recette;
use App\Entity\Micropousse;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends EasyAdminController
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $_passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder){
        $this->_passwordEncoder = $passwordEncoder;
    }

    /**
     * Don't forget to add this route annotation!
     *
     * @Route("/easyadmin/", name="admin")
     */
    public function indexAction(Request $request)
    {
        // if the URL doesn't include the entity name, this is the index page  // if the URL doesn't include the entity name, this is the index page
        if (null === $request->query->get('entity')) {
            // define this route in any of your own controllers
            return $this->redirectToRoute('admin');
        }


        // don't forget to add this line to serve the regular backend pages
        return parent::indexAction($request);
    }


   public function persistUserEntity($entity){
        $hash = $this->_passwordEncoder->encodePassword($entity, $entity->getPassword());
        $entity->setPassword($hash);
        $entity->setCreateAt(new \DateTime());
        parent::updateEntity($entity);
   }  

    public function persistEquipeEntity($entity){
        $entity->setCreateAt(new \DateTime());
        parent::updateEntity($entity);
   }   
     
    public function persistPageEntity($entity){
        $entity->setCreateAt(new \DateTime());
        parent::updateEntity($entity);
    }

    public function persistEntrepriseEntity($entity){
        // exit;
        $entity->setCreateAt(new \DateTime());
        parent::updateEntity($entity);

        // if (!$entity->getPage()) {
        $idEntreprise = $entity->getId();
        // dump($idEntreprise);

        $this->initEntreprise($entity);            
        // }
    }

    //Créer les pages, le contenu, un membre d'équipe et une micropousse
    //pour chaque nouvelle entreprise créee
    //Sera injecté dés la fin de création de l'entreprise
    //A finir:
    // la partie contenu et les test
    public function initEntreprise($idEntreprise): Response
    {
        
        $em = $this->getDoctrine()->getManager();
//________________START_PAGE____________________________________________________________________________________________________________________                
        $homePage = new Page();
        $micropoussePage = new Page();
        $missionPage = new Page();
        $contactPage = new Page();

        $homePage->setName("homePage")
                ->setOnline(1)
                ->setCreateAt(new \DateTime())
                // ->setContent($blockNotreHistoire)
                ->setEntreprise($idEntreprise);

        $micropoussePage->setName("micropoussePage")
                        ->setOnline(1)
                        ->setCreateAt(new \DateTime())
                        // ->setContent($arrayContent)
                        ->setEntreprise($idEntreprise);
        
        $missionPage->setName("missionPage")
                    ->setOnline(1)
                    ->setCreateAt(new \DateTime())
                    // ->setContent($arrayContent)
                    ->setEntreprise($idEntreprise);

        $contactPage->setName("contactPage")
                    ->setOnline(1)
                    ->setCreateAt(new \DateTime())
                    // ->setContent($arrayContent)
                    ->setEntreprise($idEntreprise);
        $em->persist($homePage);                    
        $em->persist($micropoussePage);                    
        $em->persist($missionPage);                    
        $em->persist($contactPage);  
        $em->flush();                  
//________________END_Page____________________________________________________________________________________________________________________                

//Init page ID
$idPageHomeVille = $homePage;
$idPageMicro =  $micropoussePage;
$idPageMission = $missionPage;
$idPageContact = $contactPage;

        // Je dois Récupérer l'Id de chaque page
        //Contruire if condition
//________________START_CONTENT____________________________________________________________________________________________________________________                
        $blockNotreHistoire = new Content();
        $cardHomeVille = new Content();
        $cardHomeVille2 = new Content();
        $titleMicropousse = new Content();
        $titleGammeMicropousse = new Content();
        $titleRecetteMicro = new Content();
        $titleMission = new Content();
        $cardMission = new Content();
        $cardMission2 = new Content();
        $cardMission3 = new Content();
        $cardContact = new Content();
        $cardContact2 = new Content();
        $cardContact3 = new Content();

        //	PAGE HOMEPAGE
        $blockNotreHistoire->setName("homePage")
                ->setOnline(1)
                ->settitle("Veuillez modifier votre contenu")
                ->setContenu("Veuillez modifier votre contenu")
                ->setPage($idPageHomeVille);
        
        $cardHomeVille->setName("card-home-ville")
                        ->setTitle("Titre de la carte")
                        ->setOnline(1)
                        ->setContenu("Veuillez modifier votre contenu")
                        ->setPage($idPageHomeVille);

        $cardHomeVille2->setName("card-home-ville")
                        ->setTitle("Titre de la carte")
                        ->setOnline(1)
                        ->setContenu("Veuillez modifier votre contenu")
                        ->setPage($idPageHomeVille);
        
        //	PAGE MICROPOUSSE       
        $titleMicropousse->setName("title-micropousse")
                         ->setTitle("Qu'est ce qu'une micropousse ?")
                         ->setOnline(1)
                         ->setContenu("Veuillez modifier votre contenu")
                         ->setPage($idPageMicro);

        //title-gamme-micropousse
        $titleGammeMicropousse->setName("title-gamme-micropousse")
                         ->setTitle("Notre Gamme")
                         ->setOnline(1)
                         ->setContenu("Veuillez modifier votre contenu")
                         ->setPage($idPageMicro);
//	title-recette
        $titleRecetteMicro->setName("title-recette")
                            ->setTitle("Nos Recettes")
                            ->setOnline(1)
                            ->setContenu("Veuillez modifier votre contenu")
                            ->setPage($idPageMicro);
        //	PAGE MISSION
        $titleMission->setName("title-mission")
                    ->setTitle("Titre animation 1")
                    ->setOnline(1)
                    ->setContenu("Veuillez modifier votre contenu")
                    ->setPage($idPageMission);

        //card-mission                  
        $cardMission->setName("card-mission")
                    ->setTitle("Titre animation 1")
                    ->setOnline(1)
                    ->setContenu("Veuillez modifier votre contenu")
                    ->setPage($idPageMission);

        $cardMission2->setName("card-mission")
                    ->setTitle("Titre animation 2")
                    ->setOnline(1)
                    ->setContenu("Veuillez modifier votre contenu")
                    ->setPage($idPageMission);

        $cardMission3->setName("card-mission")
                    ->setTitle("Titre animation 2")
                    ->setOnline(1)
                    ->setContenu("Veuillez modifier votre contenu")
                    ->setPage($idPageMission);  
                    
        //	PAGE CONTACT
        $cardContact->setName("card-contact")
                    ->setTitle("DES QUESTIONS ? UNE IDÉE ? NOUS SOUTENIR ?")
                    ->setOnline(1)
                    ->setContenu("Veuillez modifier votre contenu")
                    ->setPage($idPageContact);  
        
        $cardContact2->setName("card-contact")
                    ->setTitle("INFOS VISITEURS")
                    ->setOnline(1)
                    ->setContenu("Veuillez modifier votre contenu")
                    ->setPage($idPageContact);  
                    
        $cardContact3->setName("card-contact")
                    ->setTitle("Adresse")
                    ->setOnline(1)
                    ->setContenu("Veuillez modifier votre contenu")
                    ->setPage($idPageContact);  
                    
                    $em->persist($blockNotreHistoire);                    
                    $em->persist($cardHomeVille);                    
                    $em->persist($cardHomeVille2);                    
                    $em->persist($titleMicropousse); 
                    $em->persist($titleGammeMicropousse); 
                    $em->persist($titleRecetteMicro); 
                    $em->persist($titleMission); 
                    $em->persist($cardMission); 
                    $em->persist($cardMission2); 
                    $em->persist($cardMission3); 
                    $em->persist($cardContact); 
                    $em->persist($cardContact2); 
                    $em->persist($cardContact3);  
                    $em->flush();                    
//________________END_CONTENT____________________________________________________________________________________________________________________                

                    
$homePage->addContent($blockNotreHistoire,$cardHomeVille,$cardHomeVille2);
$micropoussePage->addContent($titleMicropousse,$titleGammeMicropousse,$titleRecetteMicro);
$missionPage->addContent($titleMission,$cardMission,$cardMission2,$cardMission3);
$contactPage->addContent($cardContact,$cardContact2,$cardContact3);

                    $em->persist($homePage); 
                    $em->persist($micropoussePage);  
                    $em->persist($missionPage);  
                    $em->persist($contactPage);  
                    $em->flush();                
//________________START_EQUIPE_&_MICROPOUSSE__________________________________________________________________________________________________________________                
        $equipe = new Equipe();
        $micropousse = new Micropousse();

        $equipe->setName("Nom Prénom")
                ->setDescription("Description du nouveau membre d'équipe")
                ->setImageName("user.png")
                ->setEntreprise($idEntreprise)
                ->setCreateAt(new \DateTime());

        $micropousse->setName("Folie de Radis")
                    ->setDescription("Mes charmes irrésistibles Ce qui nous rend folles, c’est notre mélange. Pourpre, rose et daïkon, nous avons toutes le bon goût du radis frais Nos belles feuilles tendres et nos tiges de toutes les couleurs mettront de la joie dans vos assiettes !")
                    ->setImageName("foliederadis.png")
                    ->setEntreprise($idEntreprise);

                    $em->persist($equipe);  
                    $em->persist($micropousse);  
                    $em->flush();

                    return new Response('Entreprise ' . $idEntreprise->getName() . 'à bien été crée.');
    }
   
}
