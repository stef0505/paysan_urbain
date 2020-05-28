<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction'], null, null, null, true, false, null]],
        '/content' => [[['_route' => 'content', '_controller' => 'App\\Controller\\ContentController::index'], null, null, null, false, false, null]],
        '/footer' => [[['_route' => 'footer', '_controller' => 'App\\Controller\\FooterController::index'], null, null, null, false, false, null]],
        '/page' => [[['_route' => 'page', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_page', '_controller' => 'App\\Controller\\PageController::homePage'], null, null, null, false, false, null]],
        '/sorry' => [[['_route' => 'notOnline', '_controller' => 'App\\Controller\\PageController::notOnline'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/loginAdmin' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/easyadmin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::indexAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/([^/]++)/(?'
                    .'|contact(*:189)'
                    .'|accueil(*:204)'
                    .'|nos\\-(?'
                        .'|animations(*:230)'
                        .'|micro\\-pousses(*:252)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], ['nameEntreprise'], null, null, false, false, null]],
        204 => [[['_route' => 'home_ville', '_controller' => 'App\\Controller\\PageController::homeVillePage'], ['nameEntreprise'], null, null, false, false, null]],
        230 => [[['_route' => 'nos_missions', '_controller' => 'App\\Controller\\PageController::missionPage'], ['nameEntreprise'], null, null, false, false, null]],
        252 => [
            [['_route' => 'nos_micropousses', '_controller' => 'App\\Controller\\PageController::micropoussePage'], ['nameEntreprise'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
