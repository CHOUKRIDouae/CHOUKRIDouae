<?php
namespace MyApp\TodoBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MyApp\TodoBundle\Entity\Tache;
use MyApp\TodoBundle\Form\TacheForm;

class TacheController extends ContainerAware
{
public function ajouterAction()
{
  $message='';
  $tache = new Tache();
  $form = $this->container->get('form.factory')->create(new TacheForm(), $tache);

  $request = $this->container->get('request');

  if ($request->isMethod('POST')) 
  {
    $form->handleRequest($request);

    if ($form->isValid()) 
    {
      $em = $this->container->get('doctrine')->getEntityManager();
      $em->persist($tache);
      $em->flush();
      $message='Tache ajoutée avec succès !';
    }
  }

  return $this->container->get('templating')->renderResponse(
'MyAppTodoBundle:Tache:ajouter.html.twig',
  array(
    'form' => $form->createView(),
    'message' => $message,
  ));
}
public function listerAction()
{        
	$em = $this->container->get('doctrine')->getEntityManager();

	$tache= $em->getRepository('MyAppTodoBundle:Tache')->findAll();

	return $this->container->get('templating')->renderResponse('MyAppTodoBundle:Tache:lister.html.twig', 
	array(
	'tache' => $tache
 	));
}
public function listerallAction($id = null)
{
    $message='';
	$em = $this->container->get('doctrine')->getEntityManager();

	if (isset($id)) 
	{
		// modification d'un acteur existant : on recherche ses données
		$tache = $em->find('MyAppTodoBundle:Tache', $id);

		if (!$tache)
		{
			$message='Aucune Tache trouvée';
		}
	}
	return $this->container->get('templating')->renderResponse('MyAppTodoBundle:Tache:listerall.html.twig',
        array(
	'tache' => $tache
	));
}

   
}
