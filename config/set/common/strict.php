<?php

declare (strict_types=1);
namespace _PhpScopere7e518ee6a5b;

use PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use PhpCsFixer\Fixer\Strict\StrictParamFixer;
use _PhpScopere7e518ee6a5b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(StrictComparisonFixer::class);
    $services->set(IsNullFixer::class);
    $services->set(StrictParamFixer::class);
};
