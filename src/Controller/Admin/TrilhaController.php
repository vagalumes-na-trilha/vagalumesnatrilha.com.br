<?php

namespace App\Controller\Admin;

use App\Entity\TipoDeObjetivo;
use App\Entity\TipoDeTrilha;
use App\Entity\Trilha;
use App\Entity\UF;
use App\Form\TrilhaType;
use App\Repository\TipoDeObjetivoRepository;
use App\Repository\TipoDeTrilhaRepository;
use App\Repository\UFRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrilhaController extends AbstractController
{
    #[Route('/admin/trilha', name: 'admin_trilha')]
    public function index(

    ): Response
    {


        return $this->render('admin/trilha/index.html.twig', [

        ]);
    }

    #[Route('/admin/trilha/nova', name: 'admin_trilha_nova')]
    public function form(
        TipoDeTrilhaRepository $tipoDeTrilhaRepository,
        TipoDeObjetivoRepository $tipoDeObjetivoRepository,
        UFRepository $UFRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        $trilha = new Trilha();

        if ("POST" == $request->getMethod()) {
            $all = $request->request->all();

            $trilha->setNome($all['trilha']['nome']);
            $trilha->setData(date_create_from_format("!d/m/Y", $all['trilha']['data']));
            $trilha->setDescricao($all['trilha']['descricao']);
            $trilha->setTipoDeTrilha($tipoDeTrilhaRepository->find($all['trilha']['tipoDeTrilha']));
            $trilha->setTipoDeObjetivo($tipoDeObjetivoRepository->find($all['trilha']['tipoDeObjetivo']));
            $trilha->setDistanciaEmMetros($all['trilha']['distanciaEmMetros']);
            $trilha->setAltitudeMaximaEmMetros($all['trilha']['altitudeMaximaEmMetros']);
            $trilha->setAscencaoPositivaEmMetros($all['trilha']['ascencaoPositivaEmMetros']);
            $trilha->setNomeDoObjetivo($all['trilha']['nomeDoObjetivo']);
            $trilha->setUFDoObjetivo($UFRepository->find($all['trilha']['UFDoObjetivo']));
            $trilha->setMunicipioDoObjetivo($all['trilha']['municipioDoObjetivo']);

            $trilha->setInicioGeom($this->converteGeom($all['trilha']['inicioGeom']));
            $trilha->setFimGeom($this->converteGeom($all['trilha']['fimGeom']));
            $trilha->setGeomDoObjetivo($this->converteGeom($all['trilha']['geomDoObjetivo']));

            $entityManager->persist($trilha);
            $entityManager->flush();
        }

        return $this->render('admin/trilha/form.html.twig', [
            'trilha' => $trilha,
            'tiposDeTrilha' => $tipoDeTrilhaRepository->findAll(),
            'tiposDeObjetivo' => $tipoDeObjetivoRepository->findAll(),
            'ufs' => $UFRepository->findAll()
        ]);
    }

    protected function converteGeom($latLong)
    {
        preg_replace("[^0-9,.]", "", $latLong);

        $xy = explode(",", $latLong);

        if (count($xy) != 2 ) {
            return "";
        }

        return sprintf("SRID=4326;POINT(%s %s)", $xy[0], $xy[1]);

    }
}
