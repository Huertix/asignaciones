<?php

namespace EMM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EMMUserBundle:Default:index.html.twig', array('name' => $name));
    }

    public function articlesAction($page)
    {
        return New Response('Este mi articulo ' . $page);
    }
}
