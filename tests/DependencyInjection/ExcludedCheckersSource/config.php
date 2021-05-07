<?php

declare (strict_types=1);
namespace _PhpScoper2dcc760f8ff8;

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use _PhpScoper2dcc760f8ff8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SKIP, [NoUnusedImportsFixer::class => null]);
    $services = $containerConfigurator->services();
    $services->set(NoUnusedImportsFixer::class);
};
