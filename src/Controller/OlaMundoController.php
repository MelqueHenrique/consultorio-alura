<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OlaMundoController
{
    /**
     * @Route ("/ola")
     */
    public function olaMundoAction(Request $request): Response
    {
        $pathInfo = $request->getPathInfo();
        $parametro = $request->query->get('parametro'); //pegando um parametro unico
        $query = $request->query->all();// pegando varios parametros
        return new JsonResponse(
            [
                'mensagem'=>'Olá Mundo!',
                'pathInfo'=>$pathInfo,
                'parametro'=>$parametro,
                'query'=>$query
            ]);
    }

}