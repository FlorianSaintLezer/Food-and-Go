<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'comments' => [[], ['_controller' => 'App\\Controller\\AdminCommentsController::comments'], [], [['text', '/admin/comments/']], [], []],
    'admin_comments_creation' => [[], ['_controller' => 'App\\Controller\\AdminCommentsController::modification'], [], [['text', '/admin/comments/creation']], [], []],
    'admin_comments_modification' => [['id'], ['_controller' => 'App\\Controller\\AdminCommentsController::modification'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/comments']], [], []],
    'admin_comments_suppression' => [['id'], ['_controller' => 'App\\Controller\\AdminCommentsController::suppression'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/comments']], [], []],
    'admin_home' => [[], ['_controller' => 'App\\Controller\\AdminRecipesController::index'], [], [['text', '/admin']], [], []],
    'admin_recipes' => [[], ['_controller' => 'App\\Controller\\AdminRecipesController::recipes'], [], [['text', '/admin/recipes/']], [], []],
    'admin_recipes_creation' => [[], ['_controller' => 'App\\Controller\\AdminRecipesController::modification'], [], [['text', '/admin/recipes/creation']], [], []],
    'admin_recipes_modification' => [['id'], ['_controller' => 'App\\Controller\\AdminRecipesController::modification'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/recipes']], [], []],
    'admin_recipes_suppression' => [['id'], ['_controller' => 'App\\Controller\\AdminRecipesController::suppression'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/recipes']], [], []],
    'signin' => [[], ['_controller' => 'App\\Controller\\AdminSecuController::signin'], [], [['text', '/signin']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\AdminSecuController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\AdminSecuController::logout'], [], [['text', '/logout']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\RecipesController::index'], [], [['text', '/']], [], []],
    'recipes' => [[], ['_controller' => 'App\\Controller\\RecipesController::recipes'], [], [['text', '/recipes']], [], []],
    'profileedit_user' => [[], ['_controller' => 'App\\Controller\\UsersController::edit'], [], [['text', '/profile/edituser']], [], []],
    'profileedit_password' => [[], ['_controller' => 'App\\Controller\\UsersController::changePassword'], [], [['text', '/profile/editpassword']], [], []],
];
