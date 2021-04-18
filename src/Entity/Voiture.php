<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="text")
     */
    private $marque;

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @ORM\Column(type="text")
     */
    private $coleur;

    public function getColeur(): ?string
    {
        return $this->coleur;
    }

    public function setColeur($coleur)
    {
        $this->coleur;
    }

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreDePlace;

    public function getNombreDePlace(): ?string
    {
        return $this->nombreDePlace;
    }

    public function setNombreDePlace($nombreDePlace)
    {
        $this->nombreDePlace = $nombreDePlace;
    }

    
    /**
     * @ORM\Column(type="text")
     */
    private $nomAgence;

    public function getNomAgence(): ?string
    {
        return $this->nomAgence;
    }

    public function setNomAgence($nomAgence)
    {
        $this->nomAgence = $nomAgence;
    }
}
