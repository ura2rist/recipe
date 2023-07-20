<?php
  declare(strict_types=1);

  require __DIR__ . "/vendor/autoload.php";

  use \App\core\Route;

  $router = new Route();

  $router->add('/registration', 'app/controllers/AuthController.php');
  // $route->add("/user/{id}/{username}/{country}","user.php");
  // $route->add('/login', 'views/login.php');

  // $route->notFound("views/404.php");