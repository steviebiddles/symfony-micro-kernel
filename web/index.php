<?php
require_once __DIR__ . '/../app/autoload.php';
require_once __DIR__ . '/../app/MicroKernel.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$kernel = new MicroKernel('dev', true);
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
