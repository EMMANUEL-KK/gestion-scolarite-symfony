<?php

namespace App\Entity;

use App\Repository\FiliereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FiliereRepository::class)]
class Filiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10,unique:true)]
    private ?string $codef = null;

    #[ORM\Column(length: 200)]
    private ?string $intitulef = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodef(): ?string
    {
        return $this->codef;
    }

    public function setCodef(string $codef): static
    {
        $this->codef = $codef;

        return $this;
    }

    public function getIntitulef(): ?string
    {
        return $this->intitulef;
    }

    public function setIntitulef(string $intitulef): static
    {
        $this->intitulef = $intitulef;

        return $this;
    }
}
