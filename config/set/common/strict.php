<?php

declare (strict_types=1);
namespace _PhpScoper1b2f8b9c0339;

use PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use PhpCsFixer\Fixer\Strict\StrictParamFixer;
use _PhpScoper1b2f8b9c0339\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(StrictComparisonFixer::class);
    $services->set(IsNullFixer::class)->call('configure', [['use_yoda_style' => \false]]);
    $services->set(StrictParamFixer::class);
};
