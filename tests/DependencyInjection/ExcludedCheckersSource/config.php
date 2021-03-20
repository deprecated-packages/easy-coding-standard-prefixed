<?php

declare (strict_types=1);
namespace _PhpScoperb0c6500a504c;

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use _PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (\_PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::SKIP, [\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class => null]);
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class);
};
