<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/chat' => [[['_route' => 'chat_index', '_controller' => 'App\\Controller\\ChatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/chat/new' => [[['_route' => 'chat_new', '_controller' => 'App\\Controller\\ChatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contact/new' => [[['_route' => 'contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/news' => [[['_route' => 'news_index', '_controller' => 'App\\Controller\\NewsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/news/new' => [[['_route' => 'news_new', '_controller' => 'App\\Controller\\NewsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|hat/([^/]++)(?'
                        .'|(*:27)'
                        .'|/edit(*:39)'
                        .'|(*:46)'
                    .')'
                    .'|ontact/([^/]++)(?'
                        .'|(*:72)'
                        .'|/edit(*:84)'
                        .'|(*:91)'
                    .')'
                .')'
                .'|/news/([^/]++)(?'
                    .'|(*:117)'
                    .'|/edit(*:130)'
                    .'|(*:138)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:164)'
                    .'|/edit(*:177)'
                    .'|(*:185)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'chat_show', '_controller' => 'App\\Controller\\ChatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        39 => [[['_route' => 'chat_edit', '_controller' => 'App\\Controller\\ChatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        46 => [[['_route' => 'chat_delete', '_controller' => 'App\\Controller\\ChatController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        72 => [[['_route' => 'contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        84 => [[['_route' => 'contact_edit', '_controller' => 'App\\Controller\\ContactController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        91 => [[['_route' => 'contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        117 => [[['_route' => 'news_show', '_controller' => 'App\\Controller\\NewsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        130 => [[['_route' => 'news_edit', '_controller' => 'App\\Controller\\NewsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        138 => [[['_route' => 'news_delete', '_controller' => 'App\\Controller\\NewsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        164 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        177 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        185 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
