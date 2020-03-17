<?php

require 'core/Router.php';

$router = new Router;

require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'],'/');

require $router->direct($uri); //this will return uri and its corresponding file