<?php

namespace MyApp\TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
public function indexAction()
{
	$em = $this->container->get('doctrine')->getEntityManager();
	$tache = $em->getRepository('MyAppTodoBundle:Tache')->findAll();

	return $this->container->get('templating')->renderResponse('MyAppTodoBundle:Default:index.html.twig',array(
		 'tache' => $tache)
	);
}
}
