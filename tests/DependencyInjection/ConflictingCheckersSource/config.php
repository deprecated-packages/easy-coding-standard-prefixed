<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4;

use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use SlevomatCodingStandard\Sniffs\ControlStructures\DisallowYodaComparisonSniff;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowYodaComparisonSniff::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer::class);
};
