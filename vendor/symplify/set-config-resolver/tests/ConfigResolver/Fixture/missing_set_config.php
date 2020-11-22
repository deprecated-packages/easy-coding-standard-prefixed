<?php

declare (strict_types=1);
namespace _PhpScoper4cd05b62e9f1;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper4cd05b62e9f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4cd05b62e9f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
