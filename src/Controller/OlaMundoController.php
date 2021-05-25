<?php


namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;

class OlaMundoController
{
    /**
     * @Route ("/ola"), methods={POST}
     */
    public function olaMundoAction()
    {
        echo 'Olá mundo!';
        exit();
    }

}