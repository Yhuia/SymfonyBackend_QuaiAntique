<?php

namespace App\Entity;

use App\Repository\HorairesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HorairesRepository::class)]
class Horaires
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $jour_de_la_semaine = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $heure_midi_ouverture = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $heure_midi_fermeture = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $heure_soir_ouverture = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $heure_soir_fermeture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJourDeLaSemaine(): ?string
    {
        return $this->jour_de_la_semaine;
    }

    public function setJourDeLaSemaine(string $jour_de_la_semaine): self
    {
        $this->jour_de_la_semaine = $jour_de_la_semaine;

        return $this;
    }

    public function getHeureMidiOuverture(): ?\DateTimeInterface
    {
        return $this->heure_midi_ouverture;
    }

    public function setHeureMidiOuverture(?\DateTimeInterface $heure_midi_ouverture): self
    {
        $this->heure_midi_ouverture = $heure_midi_ouverture;

        return $this;
    }

    public function getHeureMidiFermeture(): ?\DateTimeInterface
    {
        return $this->heure_midi_fermeture;
    }

    public function setHeureMidiFermeture(?\DateTimeInterface $heure_midi_fermeture): self
    {
        $this->heure_midi_fermeture = $heure_midi_fermeture;

        return $this;
    }

    public function getHeureSoirOuverture(): ?\DateTimeInterface
    {
        return $this->heure_soir_ouverture;
    }

    public function setHeureSoirOuverture(?\DateTimeInterface $heure_soir_ouverture): self
    {
        $this->heure_soir_ouverture = $heure_soir_ouverture;

        return $this;
    }

    public function getHeureSoirFermeture(): ?\DateTimeInterface
    {
        return $this->heure_soir_fermeture;
    }

    public function setHeureSoirFermeture(?\DateTimeInterface $heure_soir_fermeture): self
    {
        $this->heure_soir_fermeture = $heure_soir_fermeture;

        return $this;
    }
}
