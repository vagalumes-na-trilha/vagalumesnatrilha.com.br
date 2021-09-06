<?php

namespace App\Entity;

use App\Repository\CarrosselRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarrosselRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Carrossel
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
    private $arquivo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $texto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $link;

    /**
     * @ORM\Column(type="datetimetz")
     */
    private $datahoraInicio;

    /**
     * @ORM\Column(type="datetimetz", nullable=true)
     */
    private $datahoraFim;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArquivo(): ?string
    {
        return $this->arquivo;
    }

    public function setArquivo(string $arquivo): self
    {
        $this->arquivo = $arquivo;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getTexto(): ?string
    {
        return $this->texto;
    }

    public function setTexto(string $texto): self
    {
        $this->texto = $texto;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getDatahoraInicio(): ?\DateTimeInterface
    {
        return $this->datahoraInicio;
    }

    public function setDatahoraInicio(\DateTimeInterface $datahoraInicio): self
    {
        $this->datahoraInicio = $datahoraInicio;

        return $this;
    }

    public function getDatahoraFim(): ?\DateTimeInterface
    {
        return $this->datahoraFim;
    }

    public function setDatahoraFim(?\DateTimeInterface $datahoraFim): self
    {
        $this->datahoraFim = $datahoraFim;

        return $this;
    }

    /**
     * @ORM\PrePersist
     */
    public function preencheDatahoraInicio()
    {
        if (is_null($this->datahoraInicio)) {
            $this->setDatahoraInicio(new \Datetime('now'));
        }
    }
}
