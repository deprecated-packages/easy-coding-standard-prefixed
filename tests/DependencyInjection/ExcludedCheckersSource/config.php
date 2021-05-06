<?php

declare (strict_types=1);
namespace _PhpScopere7e518ee6a5b;

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use _PhpScopere7e518ee6a5b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SKIP, [NoUnusedImportsFixer::class => null]);
    $services = $containerConfigurator->services();
    $services->set(NoUnusedImportsFixer::class);
};
