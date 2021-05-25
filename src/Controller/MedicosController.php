<?php


namespace App\Controller;


use App\Entity\Medico;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MedicosController
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager=$entityManager;
    }

    /**
     * @Route("/medicos", methods={"POST"})
     */
    public function novoMedico(Request $request):Response
    {
        $corpoRequisicao = $request->getContent();
        $dadoEmJson = json_decode($corpoRequisicao);

        $medico = new Medico();
        $medico->crm=$dadoEmJson->crm;
        $medico->nome=$dadoEmJson->nome;

        $this->entityManager->persist($medico);
        //realizar varias operações com banco
        $this->entityManager->flush();

        return new JsonResponse($medico);
    }
}