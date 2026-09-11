<?php

namespace App\Entity;

use App\Repository\DepartementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepartementRepository::class)]
class Departement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $coded = null;

    #[ORM\Column(length: 100)]
    private ?string $nomd = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoded(): ?string
    {
        return $this->coded;
    }

    public function setCoded(string $coded): static
    {
        $this->coded = $coded;

        return $this;
    }

    public function getNomd(): ?string
    {
        return $this->nomd;
    }

    public function setNomd(string $nomd): static
    {
        $this->nomd = $nomd;

        return $this;
    }
}
