<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Entreprise;
use App\Form\RegistrationType;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class SecurityController extends AbstractController
{
    /**
     * @Route("/register", name="security_registration")
     */
    public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder){
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);
        
        // $data = $form->getData();


        if ($form->isSubmitted()  && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());


            $user->setPassword($hash);
            $user->setCreateAt(new \DateTime());
            // $user->addEntreprise();
            // $user->addEntreprise('1');


            $manager->persist($user);
            $manager->flush();
            
            //Ajout function si connection encore renvois sur admin 
            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/loginAdmin", name="security_login");
     */
    public function login(){
        // Check if users in DB
        $repoUser = $this->getDoctrine()->getRepository(User::class);
        $userInDb = $repoUser->findAll();
        if (count($userInDb) > 0) {
            return $this->render('security/login.html.twig');            
        }else{
            return $this->redirectToRoute('security_registration');
        }

        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/logout", name="security_logout");
     */
    public function logout(){}
}
