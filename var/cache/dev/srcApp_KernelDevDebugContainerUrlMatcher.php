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
        $this->staticRoutes = [
            '/api/orders/all' => [[['_route' => 'orders', '_controller' => 'App\\Controller\\OrdersController::index'], null, ['GET' => 0], null, false, false, null]],
            '/api/orders/create' => [[['_route' => 'create_orders', '_controller' => 'App\\Controller\\OrdersController::createOrder'], null, ['POST' => 0], null, false, false, null]],
            '/api/product/all' => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
            '/api/product/create' => [[['_route' => 'create_product', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, ['GET' => 0], null, false, false, null]],
            '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
            '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/api/auth/login' => [[['_route' => 'api_auth_login'], null, ['POST' => 0], null, false, false, null]],
            '/api/auth/register' => [[['_route' => 'api_auth_register', '_controller' => 'App\\Controller\\Api\\ApiAuthController::register'], null, ['POST' => 0], null, false, false, null]],
        ];
        $this->regexpList = [
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
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => 'orders_show', '_controller' => 'App\\Controller\\OrdersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            60 => [[['_route' => 'update_orders', '_controller' => 'App\\Controller\\OrdersController::updateOrder'], ['id'], ['POST' => 0], null, false, true, null]],
            81 => [[['_route' => 'api_user_detail', '_controller' => 'App\\Controller\\Api\\ApiUserController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
            120 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            140 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            186 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            200 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            220 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            233 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            243 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
