<?php

declare (strict_types=1);
namespace _PhpScoper880bfa4d8b51;

use PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use PhpCsFixer\Fixer\Strict\StrictParamFixer;
use _PhpScoper880bfa4d8b51\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper880bfa4d8b51\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Strict\StrictComparisonFixer::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer::class)->call('configure', [['use_yoda_style' => \false]]);
    $services->set(\PhpCsFixer\Fixer\Strict\StrictParamFixer::class);
};
