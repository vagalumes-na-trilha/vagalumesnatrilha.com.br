<?php

namespace App\Entity;

use App\Repository\FotoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FotoRepository::class)
 */
class Foto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity=Trilha::class, inversedBy="fotos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $trilha;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getTrilha(): ?Trilha
    {
        return $this->trilha;
    }

    public function setTrilha(?Trilha $trilha): self
    {
        $this->trilha = $trilha;

        return $this;
    }
}
