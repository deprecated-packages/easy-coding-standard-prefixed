<?php

declare (strict_types=1);
namespace _PhpScopere015d8a3273c;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer;
use _PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer::class);
};
