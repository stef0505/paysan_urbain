<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PageRepository")
 */
class Page
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
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
     * @ORM\OneToMany(targetEntity="App\Entity\Content", mappedBy="page", cascade={"remove"})
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Entreprise", inversedBy="page")
     */
    private $entreprise;

    public function __construct()
    {
        $this->content = new ArrayCollection();
        $this->createAt = new \Datetime();
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
     * @return Collection|Content[]
     */
    public function getContent(): Collection
    {
        return $this->content;
    }

    public function addContent(Content $content): self
    {
        if (!$this->content->contains($content)) {
            $this->content[] = $content;
            $content->setPage($this);
        }

        return $this;
    }

    public function removeContent(Content $content): self
    {
        if ($this->content->contains($content)) {
            $this->content->removeElement($content);
            // set the owning side to null (unless already changed)
            if ($content->getPage() === $this) {
                $content->setPage(null);
            }
        }

        return $this;
    }

    public function getEntreprise(): ?Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(?Entreprise $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }
}
