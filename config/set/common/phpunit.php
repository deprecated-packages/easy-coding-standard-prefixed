<?php

declare (strict_types=1);
namespace _PhpScoper92597f5b42a7;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer;
use _PhpScoper92597f5b42a7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper92597f5b42a7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer::class);
};
