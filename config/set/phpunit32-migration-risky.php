<?php

declare (strict_types=1);
namespace _PhpScoper6a0a7eb6e565;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer;
use _PhpScoper6a0a7eb6e565\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6a0a7eb6e565\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class)->call('configure', [['target' => '3.0']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer::class)->call('configure', [['target' => '3.2']]);
};
