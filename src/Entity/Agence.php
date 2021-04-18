<?php

namespace App\Entity;

use App\Repository\AgenceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgenceRepository::class)
 */
class Agence
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
     * @ORM\Column(type="text", length=60)
     */
    private $nom;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @ORM\Column(type="text")
     */
    private $telagence;

    public function getTelagence(): ?string
    {
        return $this->telagence;
    }

    public function setTelagence($telagence)
    {
        $this->telagence = $telagence;
    }

    /**
     * @ORM\Column(type="text", length=150)
     */
    private $addressVille;

    public function getAddressVille(): ?string
    {
        return $this->addressVille;
    }

    public function setAddressVille($addressVille)
    {
        $this->addressVille = $addressVille;
    }
}
