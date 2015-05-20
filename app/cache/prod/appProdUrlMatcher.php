<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/MyApp')) {
            // myapp_accueil
            if (rtrim($pathinfo, '/') === '/MyApp') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myapp_accueil');
                }

                return array (  '_controller' => 'MyApp\\TodoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'myapp_accueil',);
            }

            if (0 === strpos($pathinfo, '/MyApp/tache')) {
                // myapp_tache_lister
                if (rtrim($pathinfo, '/') === '/MyApp/tache') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'myapp_tache_lister');
                    }

                    return array (  '_controller' => 'MyApp\\TodoBundle\\Controller\\TacheController::listerAction',  '_route' => 'myapp_tache_lister',);
                }

                // myapp_tache_listerall
                if (0 === strpos($pathinfo, '/MyApp/tache/listerall') && preg_match('#^/MyApp/tache/listerall/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_tache_listerall')), array (  '_controller' => 'MyApp\\TodoBundle\\Controller\\TacheController::listerallAction',));
                }

                // myapp_tache_ajouter
                if ($pathinfo === '/MyApp/tache/ajouter') {
                    return array (  '_controller' => 'MyApp\\TodoBundle\\Controller\\TacheController::ajouterAction',  '_route' => 'myapp_tache_ajouter',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
