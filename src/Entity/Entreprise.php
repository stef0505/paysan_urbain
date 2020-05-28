<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntrepriseRepository")
 */
class Entreprise
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $online;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createAt;

   /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="entreprise")
     */
    private $user;


     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Equipe", mappedBy="entreprise", cascade={"remove"})
     */
    private $equipe;

  /**
     * @ORM\OneToMany(targetEntity="App\Entity\Micropousse", mappedBy="entreprise", cascade={"remove"})
     */
    private $micropousse;

 
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Recette", mappedBy="entreprise")
     */
    private $recette;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Page", mappedBy="entreprise",cascade={"remove"})
     */
    private $page;

    public function __construct()
    {
        $this->user = new ArrayCollection();
        $this->equipe = new ArrayCollection();
        $this->micropousse = new ArrayCollection();
        $this->recette = new ArrayCollection();
        $this->createAt = new \Datetime();
        $this->page = new ArrayCollection();

        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }
    
    public function getOnline(): ?bool
    {
        return $this->online;
    }

    public function setOnline(bool $online): self
    {
        $this->online = $online;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeInterface $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }

    
    /**
     * @return Collection|User[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(User $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
            $user->setEntreprise($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getEntreprise() === $this) {
                $user->setEntreprise(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getEquipe(): Collection
    {
        return $this->equipe;
    }

    public function addEquipe(Equipe $equipe): self
    {
        if (!$this->equipe->contains($equipe)) {
            $this->equipe[] = $equipe;
            $equipe->setEntreprise($this);
        }

        return $this;
    }

    public function removeEquipe(Equipe $equipe): self
    {
        if ($this->equipe->contains($equipe)) {
            $this->equipe->removeElement($equipe);
            // set the owning side to null (unless already changed)
            if ($equipe->getEntreprise() === $this) {
                $equipe->setEntreprise(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Micropousse[]
     */
    public function getMicropousse(): Collection
    {
        return $this->micropousse;
    }

    public function addMicropousse(Micropousse $micropousse): self
    {
        if (!$this->micropousse->contains($micropousse)) {
            $this->micropousse[] = $micropousse;
            $micropousse->setEntreprise($this);
        }

        return $this;
    }

    public function removeMicropousse(Micropousse $micropousse): self
    {
        if ($this->micropousse->contains($micropousse)) {
            $this->micropousse->removeElement($micropousse);
            // set the owning side to null (unless already changed)
            if ($micropousse->getEntreprise() === $this) {
                $micropousse->setEntreprise(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Recette[]
     */
    public function getRecette(): Collection
    {
        return $this->recette;
    }

    public function addRecette(Recette $recette): self
    {
        if (!$this->recette->contains($recette)) {
            $this->recette[] = $recette;
            $recette->setEntreprise($this);
        }

        return $this;
    }

    public function removeRecette(Recette $recette): self
    {
        if ($this->recette->contains($recette)) {
            $this->recette->removeElement($recette);
            // set the owning side to null (unless already changed)
            if ($recette->getEntreprise() === $this) {
                $recette->setEntreprise(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Page[]
     */
    public function getPage(): Collection
    {
        return $this->page;
    }

    public function addPage(Page $page): self
    {
        if (!$this->page->contains($page)) {
            $this->page[] = $page;
            $page->setEntreprise($this);
        }

        return $this;
    }

    public function removePage(Page $page): self
    {
        if ($this->page->contains($page)) {
            $this->page->removeElement($page);
            // set the owning side to null (unless already changed)
            if ($page->getEntreprise() === $this) {
                $page->setEntreprise(null);
            }
        }

        return $this;
    }


    
}
