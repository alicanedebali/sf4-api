<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/api/orders/all' => array(array(array('_route' => 'orders', '_controller' => 'App\\Controller\\OrdersController::index'), null, array('GET' => 0), null, false, false, null)),
            '/api/orders/create' => array(array(array('_route' => 'create_orders', '_controller' => 'App\\Controller\\OrdersController::createOrder'), null, array('POST' => 0), null, false, false, null)),
            '/api/product/all' => array(array(array('_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'), null, array('GET' => 0), null, false, false, null)),
            '/api/product/create' => array(array(array('_route' => 'create_product', '_controller' => 'App\\Controller\\ProductController::createProduct'), null, array('GET' => 0), null, false, false, null)),
            '/api/doc.json' => array(array(array('_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'), null, array('GET' => 0), null, false, false, null)),
            '/api/doc' => array(array(array('_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'), null, array('GET' => 0), null, false, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, false, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
            '/api/auth/login' => array(array(array('_route' => 'api_auth_login'), null, array('POST' => 0), null, false, false, null)),
            '/api/auth/register' => array(array(array('_route' => 'api_auth_register', '_controller' => 'App\\Controller\\Api\\ApiAuthController::register'), null, array('POST' => 0), null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/api/(?'
                        .'|orders/(?'
                            .'|show/([^/]++)(*:38)'
                            .'|update/([^/]++)(*:60)'
                        .')'
                        .'|user/([^/]++)(*:81)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:120)'
                        .'|wdt/([^/]++)(*:140)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:186)'
                                .'|router(*:200)'
                                .'|exception(?'
                                    .'|(*:220)'
                                    .'|\\.css(*:233)'
                                .')'
                            .')'
                            .'|(*:243)'
                        .')'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            38 => array(array(array('_route' => 'orders_show', '_controller' => 'App\\Controller\\OrdersController::show'), array('id'), array('GET' => 0), null, false, true, null)),
            60 => array(array(array('_route' => 'update_orders', '_controller' => 'App\\Controller\\OrdersController::updateOrder'), array('id'), array('POST' => 0), null, false, true, null)),
            81 => array(array(array('_route' => 'api_user_detail', '_controller' => 'App\\Controller\\Api\\ApiUserController::detail'), array('id'), array('GET' => 0), null, false, true, null)),
            120 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            140 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            186 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            200 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            220 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            233 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            243 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
        );
    }
}
