<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('sets', ['not_here']);
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
