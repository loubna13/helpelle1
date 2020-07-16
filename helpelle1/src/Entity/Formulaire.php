<?php

namespace App\Entity;

use App\Repository\FormulaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormulaireRepository::class)
 */
class Formulaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $prenom;

    /**
     * @ORM\Column(type="text")
     */
    private $motivations;
    
    /**
     * @ORM\Column(type="string", length=80)
     */
    private $sujet;
    
    /**
     * @ORM\Column(type="string", length=30)
     */
    private $mail;

   

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $mail;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMotivations(): ?string
    {
        return $this->motivations;
    }

    public function setMotivations(string $motivations): self
    {
        $this->motivations = $motivations;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }
}
