<?php

declare (strict_types=1);
namespace _PhpScoperc7a2896cc805;

use PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use PhpCsFixer\Fixer\Strict\StrictParamFixer;
use _PhpScoperc7a2896cc805\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(StrictComparisonFixer::class);
    $services->set(IsNullFixer::class);
    $services->set(StrictParamFixer::class);
};
