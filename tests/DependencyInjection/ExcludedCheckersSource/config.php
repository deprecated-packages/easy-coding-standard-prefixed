<?php

declare (strict_types=1);
namespace _PhpScoper3e7ab659bd82;

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use _PhpScoper3e7ab659bd82\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (\_PhpScoper3e7ab659bd82\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::SKIP, [\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class => null]);
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class);
};
