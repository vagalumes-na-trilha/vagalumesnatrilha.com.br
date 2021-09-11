<?php

namespace App\Entity;

use App\Repository\TipoDeTrilhaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TipoDeTrilhaRepository::class)
 */
class TipoDeTrilha
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
    private $descricao;

    /**
     * @ORM\OneToMany(targetEntity=Trilha::class, mappedBy="tipoDeTrilha")
     */
    private $trilhas;

    public function __construct()
    {
        $this->trilhas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * @return Collection|Trilha[]
     */
    public function getTrilhas(): Collection
    {
        return $this->trilhas;
    }

    public function addTrilha(Trilha $trilha): self
    {
        if (!$this->trilhas->contains($trilha)) {
            $this->trilhas[] = $trilha;
            $trilha->setTipoDeTrilha($this);
        }

        return $this;
    }

    public function removeTrilha(Trilha $trilha): self
    {
        if ($this->trilhas->removeElement($trilha)) {
            // set the owning side to null (unless already changed)
            if ($trilha->getTipoDeTrilha() === $this) {
                $trilha->setTipoDeTrilha(null);
            }
        }

        return $this;
    }
}
