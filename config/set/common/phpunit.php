<?php

declare (strict_types=1);
namespace _PhpScoper757c066053f8;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer;
use _PhpScoper757c066053f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(PhpUnitStrictFixer::class);
    $services->set(PhpUnitTestAnnotationFixer::class);
    $services->set(PhpUnitSetUpTearDownVisibilityFixer::class);
};
