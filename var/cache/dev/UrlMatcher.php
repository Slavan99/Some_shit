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
        '/bill' => [[['_route' => 'bill_index', '_controller' => 'App\\Controller\\BillController::index'], null, ['GET' => 0], null, true, false, null]],
        '/bill/new' => [[['_route' => 'bill_new', '_controller' => 'App\\Controller\\BillController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/party' => [[['_route' => 'party_index', '_controller' => 'App\\Controller\\PartyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/party/new' => [[['_route' => 'party_new', '_controller' => 'App\\Controller\\PartyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/person' => [[['_route' => 'person_index', '_controller' => 'App\\Controller\\PersonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/person/new' => [[['_route' => 'person_new', '_controller' => 'App\\Controller\\PersonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/bill/([^/]++)(?'
                    .'|(*:186)'
                    .'|/edit(*:199)'
                    .'|(*:207)'
                .')'
                .'|/p(?'
                    .'|arty/([^/]++)(?'
                        .'|(*:237)'
                        .'|/edit(*:250)'
                        .'|(*:258)'
                    .')'
                    .'|erson/([^/]++)(?'
                        .'|(*:284)'
                        .'|/edit(*:297)'
                        .'|(*:305)'
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
        186 => [[['_route' => 'bill_show', '_controller' => 'App\\Controller\\BillController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        199 => [[['_route' => 'bill_edit', '_controller' => 'App\\Controller\\BillController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        207 => [[['_route' => 'bill_delete', '_controller' => 'App\\Controller\\BillController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        237 => [[['_route' => 'party_show', '_controller' => 'App\\Controller\\PartyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        250 => [[['_route' => 'party_edit', '_controller' => 'App\\Controller\\PartyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'party_delete', '_controller' => 'App\\Controller\\PartyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        284 => [[['_route' => 'person_show', '_controller' => 'App\\Controller\\PersonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        297 => [[['_route' => 'person_edit', '_controller' => 'App\\Controller\\PersonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        305 => [
            [['_route' => 'person_delete', '_controller' => 'App\\Controller\\PersonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
