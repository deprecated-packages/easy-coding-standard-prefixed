<?php

declare (strict_types=1);
namespace _PhpScoper000f93dc572d;

use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use _PhpScoper000f93dc572d\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowYodaComparisonSniff;
use _PhpScoper000f93dc572d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DisallowYodaComparisonSniff::class);
    $services->set(YodaStyleFixer::class);
};
