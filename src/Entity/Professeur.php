<?php

namespace App\Entity;

use App\Repository\ProfesseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfesseurRepository::class)]
class Professeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nomp = null;

    #[ORM\Column(length: 50)]
    private ?string $prenomp = null;

    #[ORM\Column(length: 50)]
    private ?string $emailp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomp(): ?string
    {
        return $this->nomp;
    }

    public function setNomp(string $nomp): static
    {
        $this->nomp = $nomp;

        return $this;
    }

    public function getPrenomp(): ?string
    {
        return $this->prenomp;
    }

    public function setPrenomp(string $prenomp): static
    {
        $this->prenomp = $prenomp;

        return $this;
    }

    public function getEmailp(): ?string
    {
        return $this->emailp;
    }

    public function setEmailp(string $emailp): static
    {
        $this->emailp = $emailp;

        return $this;
    }
}
