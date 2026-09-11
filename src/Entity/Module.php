<?php

namespace App\Entity;

use App\Repository\ModuleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModuleRepository::class)]
class Module
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $codem = null;

    #[ORM\Column(length: 100)]
    private ?string $intituem = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodem(): ?string
    {
        return $this->codem;
    }

    public function setCodem(string $codem): static
    {
        $this->codem = $codem;

        return $this;
    }

    public function getIntituem(): ?string
    {
        return $this->intituem;
    }

    public function setIntituem(string $intituem): static
    {
        $this->intituem = $intituem;

        return $this;
    }
}
