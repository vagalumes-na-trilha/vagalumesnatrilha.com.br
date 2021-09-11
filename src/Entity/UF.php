<?php

namespace App\Entity;

use App\Repository\UFRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UFRepository::class)
 */
class UF
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $sigla;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSigla(): ?string
    {
        return $this->sigla;
    }

    public function setSigla(string $sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}
