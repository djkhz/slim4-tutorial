<?php

use DI\ContainerBuilder;
use Slim\App;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\DB as Database;
require_once __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder();

// Add DI container definitions
$containerBuilder->addDefinitions(__DIR__ . '/container.php');

// Create DI container instance
$container = $containerBuilder->build();

$capsule = new DB;
$capsule->addConnection([

    "driver" => "pgsql",

    "host" => "ec2-35-153-114-74.compute-1.amazonaws.com",

    "port" => "5432",

    "database" => "d7ct3im2qj1bk",

    "username" => "pkeobwixazekrm",

    "password" => "e0b6ee25f31df936d909e93ebaa4c6ecf9cda1a83074a84f7bb8ffef9c11a82b"


]);
//Make this Capsule instance available globally.
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();

// Create Slim App instance
$app = $container->get(App::class);
// $app->setBasePath($_SERVER['SLIM_BASE_PATH']);
// Register routes
(require __DIR__ . '/routes.php')($app);

// Register middleware
(require __DIR__ . '/middleware.php')($app);

return $app;
