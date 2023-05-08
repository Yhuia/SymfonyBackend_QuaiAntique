<?php

namespace App\Entity;

use App\Repository\UtilisateursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateursRepository::class)]
class Utilisateurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $mot_de_passe = null;

    #[ORM\Column(nullable: true)]
    private ?int $est_administrateur = null;

    #[ORM\Column(nullable: true)]
    private ?int $nombre_convives_par_defaut = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $allergies = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->mot_de_passe;
    }

    public function setMotDePasse(string $mot_de_passe): self
    {
        $this->mot_de_passe = $mot_de_passe;

        return $this;
    }

    public function getEstAdministrateur(): ?int
    {
        return $this->est_administrateur;
    }

    public function setEstAdministrateur(?int $est_administrateur): self
    {
        $this->est_administrateur = $est_administrateur;

        return $this;
    }

    public function getNombreConvivesParDefaut(): ?int
    {
        return $this->nombre_convives_par_defaut;
    }

    public function setNombreConvivesParDefaut(?int $nombre_convives_par_defaut): self
    {
        $this->nombre_convives_par_defaut = $nombre_convives_par_defaut;

        return $this;
    }

    public function getAllergies(): ?string
    {
        return $this->allergies;
    }

    public function setAllergies(?string $allergies): self
    {
        $this->allergies = $allergies;

        return $this;
    }
}
