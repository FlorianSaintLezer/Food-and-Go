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
    'signin' => [[], ['_controller' => 'App\\Controller\\AdminSecuController::signin'], [], [['text', '/signin']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\AdminSecuController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\AdminSecuController::logout'], [], [['text', '/logout']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\RecipesController::home'], [], [['text', '/']], [], []],
    'recipes' => [[], ['_controller' => 'App\\Controller\\RecipesController::recipes'], [], [['text', '/recipes']], [], []],
    'filterCategory' => [['category'], ['_controller' => 'App\\Controller\\RecipesController::filterCategory'], [], [['variable', '/', '[^/]++', 'category', true], ['text', '/recipes/category']], [], []],
    'show_recipe' => [['id'], ['_controller' => 'App\\Controller\\RecipesController::showRecipe'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/recipes']], [], []],
    'comment_add' => [['id'], ['_controller' => 'App\\Controller\\RecipesController::addComment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/recipes']], [], []],
    'comments' => [[], ['_controller' => 'App\\Controller\\User\\UserCommentsController::comments'], [], [['text', '/comments/']], [], []],
    'comments_add' => [[], ['_controller' => 'App\\Controller\\User\\UserCommentsController::modification'], [], [['text', '/user/comments/add']], [], []],
    'comments_edit' => [['id'], ['_controller' => 'App\\Controller\\User\\UserCommentsController::modification'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/comments/edit']], [], []],
    'comments_delete' => [['id'], ['_controller' => 'App\\Controller\\User\\UserCommentsController::suppression'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/comments']], [], []],
    'recipe_add' => [[], ['_controller' => 'App\\Controller\\User\\UserRecipesController::modification'], [], [['text', '/user/recipe/add']], [], []],
    'recipe_edit' => [['id'], ['_controller' => 'App\\Controller\\User\\UserRecipesController::modification'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/recipe/edit']], [], []],
    'recipe_delete' => [['id'], ['_controller' => 'App\\Controller\\User\\UserRecipesController::suppression'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/recipe']], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\User\\UsersController::edit'], [], [['text', '/user/profile']], [], []],
    'edit_password' => [[], ['_controller' => 'App\\Controller\\User\\UsersController::editPassword'], [], [['text', '/user/editpassword']], [], []],
];
