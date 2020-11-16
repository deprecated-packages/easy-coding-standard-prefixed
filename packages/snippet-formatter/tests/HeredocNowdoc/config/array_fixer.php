<?php

declare (strict_types=1);
namespace _PhpScoper4d05106cc3c0;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper4d05106cc3c0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4d05106cc3c0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
