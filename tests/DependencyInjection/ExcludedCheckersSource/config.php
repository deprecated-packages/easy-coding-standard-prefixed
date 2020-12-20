<?php

declare (strict_types=1);
namespace _PhpScoperab9510cd5d97;

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use _PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (\_PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::SKIP, [\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class => null]);
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class);
};
