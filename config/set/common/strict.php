<?php

declare (strict_types=1);
namespace _PhpScoper6c2f17c43d2d;

use PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use PhpCsFixer\Fixer\Strict\StrictParamFixer;
use _PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Strict\StrictComparisonFixer::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer::class)->call('configure', [['use_yoda_style' => \false]]);
    $services->set(\PhpCsFixer\Fixer\Strict\StrictParamFixer::class);
};
