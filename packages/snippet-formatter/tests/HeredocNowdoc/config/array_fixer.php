<?php

declare (strict_types=1);
namespace _PhpScoper22e359cd1ab0;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use _PhpScoper22e359cd1ab0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
};
