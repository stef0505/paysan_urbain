<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Formulaire {

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    private $nom;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    private $sujet;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=10)
     */
    private $message;


    /**
     * Get the value of nom
     *
     * @return  null|string
     */ 
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  null|string  $nom
     *
     * @return  Contact
     */ 
    public function setNom($nom): Formulaire
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  null|string
     */ 
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  null|string  $email
     *
     * @return  Formulaire
     */ 
    public function setEmail(?string $email): Formulaire
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of sujet
     *
     * @return  null|string
     */ 
    public function getSujet():  ?string
    {
        return $this->sujet;
    }

    /**
     * Set the value of sujet
     *
     * @param  null|string  $sujet
     *
     * @return  Formulaire
     */ 
    public function setSujet(?string $sujet): Formulaire
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get the value of message
     *
     * @return  null|string
     */ 
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @param  null|string  $message
     *
     * @return  Formulaire
     */ 
    public function setMessage(?string $message): Formulaire
    {
        $this->message = $message;

        return $this;
    }
}