<?php

declare (strict_types=1);
namespace _PhpScopercfeba9d8ad31;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScopercfeba9d8ad31\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
