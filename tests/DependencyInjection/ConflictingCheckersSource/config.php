<?php

declare (strict_types=1);
namespace _PhpScoper61bdb485188f;

use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use SlevomatCodingStandard\Sniffs\ControlStructures\DisallowYodaComparisonSniff;
use _PhpScoper61bdb485188f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper61bdb485188f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowYodaComparisonSniff::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer::class);
};
