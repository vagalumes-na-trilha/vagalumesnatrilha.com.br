<?php

namespace App\Entity;

use App\Repository\TrilhaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\Column(type="geometry", nullable=true)
     */
    private $inicioGeom;

    /**
     * @ORM\Column(type="geometry", nullable=true)
     */
    private $fimGeom;

    /**
     * @ORM\Column(type="geometry", nullable=true)
     */
    private $geomDoObjetivo;

    /**
     * @ORM\Column(type="geometry", nullable=true)
     */
    private $trackGeom;

    /**
     * @ORM\OneToMany(targetEntity=Foto::class, mappedBy="trilha", orphanRemoval=true)
     */
    private $fotos;

    public function __construct()
    {
        $this->fotos = new ArrayCollection();
    }

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

    public function getInicioGeom()
    {
        return $this->inicioGeom;
    }

    public function setInicioGeom($inicioGeom): self
    {
        $this->inicioGeom = $inicioGeom;

        return $this;
    }

    public function getFimGeom()
    {
        return $this->fimGeom;
    }

    public function setFimGeom($fimGeom): self
    {
        $this->fimGeom = $fimGeom;

        return $this;
    }

    public function getGeomDoObjetivo()
    {
        return $this->geomDoObjetivo;
    }

    public function setGeomDoObjetivo($geomDoObjetivo): self
    {
        $this->geomDoObjetivo = $geomDoObjetivo;

        return $this;
    }

    public function getTrackGeom()
    {
        return $this->trackGeom;
    }

    public function setTrackGeom($trackGeom): self
    {
        $this->trackGeom = $trackGeom;

        return $this;
    }

    /**
     * @return Collection|Foto[]
     */
    public function getFotos(): Collection
    {
        return $this->fotos;
    }

    public function addFoto(Foto $foto): self
    {
        if (!$this->fotos->contains($foto)) {
            $this->fotos[] = $foto;
            $foto->setTrilha($this);
        }

        return $this;
    }

    public function removeFoto(Foto $foto): self
    {
        if ($this->fotos->removeElement($foto)) {
            // set the owning side to null (unless already changed)
            if ($foto->getTrilha() === $this) {
                $foto->setTrilha(null);
            }
        }

        return $this;
    }
}
