<?php

declare (strict_types=1);
namespace _PhpScopercfeba9d8ad31;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer;
use _PhpScopercfeba9d8ad31\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(PhpUnitStrictFixer::class);
    $services->set(PhpUnitTestAnnotationFixer::class);
    $services->set(PhpUnitSetUpTearDownVisibilityFixer::class);
};
