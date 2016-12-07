<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // blog_default_index
        if ($pathinfo === '/def') {
            return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_default_index',);
        }

        // _index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_index');
            }

            return array (  '_controller' => 'BlogBundle\\Controller\\PostController::indexAction',  '_route' => '_index',);
        }
        not__index:

        // _new
        if ($pathinfo === '/new') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not__new;
            }

            return array (  '_controller' => 'BlogBundle\\Controller\\PostController::newAction',  '_route' => '_new',);
        }
        not__new:

        // _show
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_show')), array (  '_controller' => 'BlogBundle\\Controller\\PostController::showAction',));
        }
        not__show:

        // _edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not__edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_edit')), array (  '_controller' => 'BlogBundle\\Controller\\PostController::editAction',));
        }
        not__edit:

        // _delete
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not__delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_delete')), array (  '_controller' => 'BlogBundle\\Controller\\PostController::deleteAction',));
        }
        not__delete:

        // todo_list
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'todo_list');
            }

            return array (  '_controller' => 'MyFirstBundle\\Controller\\TodoController::indexAction',  '_route' => 'todo_list',);
        }

        // todo_create
        if ($pathinfo === '/create') {
            return array (  '_controller' => 'MyFirstBundle\\Controller\\TodoController::createAction',  '_route' => 'todo_create',);
        }

        // todo_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'todo_edit')), array (  '_controller' => 'MyFirstBundle\\Controller\\TodoController::editAction',));
        }

        if (0 === strpos($pathinfo, '/d')) {
            if (0 === strpos($pathinfo, '/de')) {
                // todo_details
                if (0 === strpos($pathinfo, '/details') && preg_match('#^/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'todo_details')), array (  '_controller' => 'MyFirstBundle\\Controller\\TodoController::detailsAction',));
                }

                // todo_delete
                if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'todo_delete')), array (  '_controller' => 'MyFirstBundle\\Controller\\TodoController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/dub')) {
                // homepage
                if (rtrim($pathinfo, '/') === '/dub') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'homepage');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
                }

                // home
                if (rtrim($pathinfo, '/') === '/dub') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'home');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DubController::indexAction',  '_route' => 'home',);
                }

                // mkent
                if ($pathinfo === '/dub/mk') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DubController::createAction',  '_route' => 'mkent',);
                }

                // getent
                if ($pathinfo === '/dub/get') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DubController::getentAction',  '_route' => 'getent',);
                }

                // lucky_page
                if ($pathinfo === '/dub/lucky') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::indexAction',  '_route' => 'lucky_page',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
