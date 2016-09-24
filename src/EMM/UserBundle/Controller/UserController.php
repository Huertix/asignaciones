<?php

namespace EMM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class UserController extends Controller
{
    public function indexAction()
    {
        return New Response('Bienvenido a mi modulo de usuarios');
    }

    public function addAction()
    {
        return New Response('añadir usuarios');
    }


}
