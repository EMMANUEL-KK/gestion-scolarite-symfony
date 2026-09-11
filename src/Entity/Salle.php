<?php

namespace App\Entity;

use App\Repository\SalleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalleRepository::class)]
class Salle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $codes = null;

    #[ORM\Column]
    private ?int $capacite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodes(): ?string
    {
        return $this->codes;
    }

    public function setCodes(string $codes): static
    {
        $this->codes = $codes;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }
}
