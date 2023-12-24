<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group("api", function ($routes) {
    $routes->post("register", "RegisterController::store");
    $routes->post("login", "LoginController::index");
    $routes->get("users", "UserController::index", ['filter' => 'authFilter']);
});
