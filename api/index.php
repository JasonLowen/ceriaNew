<?php

// Autoload dependencies
require DIR . '/../vendor/autoload.php';

// Load environment variables if not already loaded
if (file_exists(DIR . '/../.env')) {
    Dotenv\Dotenv::createImmutable(DIR . '/../')->safeLoad();
}

// Bootstrap Laravel
$app = require DIR . '/../bootstrap/app.php';

// Handle the request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request = Illuminate\Http\Request::capture();
$response = $kernel->handle($request);

$response->send();

$kernel->terminate($request, $response);
