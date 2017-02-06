<?php
$loader = require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\Common\Annotations\AnnotationRegistry;

// auto-load annotations
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));