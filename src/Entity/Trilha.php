<?php

namespace App\Entity;

use App\Repository\TrilhaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TrilhaRepository::class)
 */
class Trilha
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
    private $nome;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descricao;

    /**
     * @ORM\ManyToOne(targetEntity=TipoDeTrilha::class, inversedBy="trilhas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tipoDeTrilha;

    /**
     * @ORM\Column(type="integer")
     */
    private $distanciaEmMetros;

    /**
     * @ORM\Column(type="integer")
     */
    private $altitudeMaximaEmMetros;

    /**
     * @ORM\Column(type="integer")
     */
    private $ascencaoPositivaEmMetros;

    /**
     * @ORM\ManyToOne(targetEntity=TipoDeObjetivo::class, inversedBy="trilhas")
     */
    private $tipoDeObjetivo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomeDoObjetivo;

    /**
     * @ORM\ManyToOne(targetEntity=UF::class)
     */
    private $UFdoObjetivo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $municipioDoObjetivo;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getTipoDeTrilha(): ?TipoDeTrilha
    {
        return $this->tipoDeTrilha;
    }

    public function setTipoDeTrilha(?TipoDeTrilha $tipoDeTrilha): self
    {
        $this->tipoDeTrilha = $tipoDeTrilha;

        return $this;
    }

    public function getDistanciaEmMetros(): ?int
    {
        return $this->distanciaEmMetros;
    }

    public function setDistanciaEmMetros(int $distanciaEmMetros): self
    {
        $this->distanciaEmMetros = $distanciaEmMetros;

        return $this;
    }

    public function getAltitudeMaximaEmMetros(): ?int
    {
        return $this->altitudeMaximaEmMetros;
    }

    public function setAltitudeMaximaEmMetros(int $altitudeMaximaEmMetros): self
    {
        $this->altitudeMaximaEmMetros = $altitudeMaximaEmMetros;

        return $this;
    }

    public function getAscencaoPositivaEmMetros(): ?int
    {
        return $this->ascencaoPositivaEmMetros;
    }

    public function setAscencaoPositivaEmMetros(int $ascencaoPositivaEmMetros): self
    {
        $this->ascencaoPositivaEmMetros = $ascencaoPositivaEmMetros;

        return $this;
    }

    public function getTipoDeObjetivo(): ?TipoDeObjetivo
    {
        return $this->tipoDeObjetivo;
    }

    public function setTipoDeObjetivo(?TipoDeObjetivo $tipoDeObjetivo): self
    {
        $this->tipoDeObjetivo = $tipoDeObjetivo;

        return $this;
    }

    public function getNomeDoObjetivo(): ?string
    {
        return $this->nomeDoObjetivo;
    }

    public function setNomeDoObjetivo(string $nomeDoObjetivo): self
    {
        $this->nomeDoObjetivo = $nomeDoObjetivo;

        return $this;
    }

    public function getUFdoObjetivo(): ?UF
    {
        return $this->UFdoObjetivo;
    }

    public function setUFdoObjetivo(?UF $UFdoObjetivo): self
    {
        $this->UFdoObjetivo = $UFdoObjetivo;

        return $this;
    }

    public function getMunicipioDoObjetivo(): ?string
    {
        return $this->municipioDoObjetivo;
    }

    public function setMunicipioDoObjetivo(string $municipioDoObjetivo): self
    {
        $this->municipioDoObjetivo = $municipioDoObjetivo;

        return $this;
    }
}
