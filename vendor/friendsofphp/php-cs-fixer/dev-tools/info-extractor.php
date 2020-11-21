#!/usr/bin/env php
<?php 
namespace _PhpScopera4be459e5e3d;

require_once __DIR__ . '/../vendor/autoload.php';
$version = ['number' => \PhpCsFixer\Console\Application::VERSION, 'vnumber' => 'v' . \PhpCsFixer\Console\Application::VERSION, 'codename' => \PhpCsFixer\Console\Application::VERSION_CODENAME];
echo \json_encode(['version' => $version], \JSON_PRETTY_PRINT);
