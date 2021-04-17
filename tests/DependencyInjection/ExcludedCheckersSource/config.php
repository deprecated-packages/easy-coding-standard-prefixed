<?php

declare (strict_types=1);
namespace _PhpScoper0a055416a443;

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use _PhpScoper0a055416a443\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SKIP, [NoUnusedImportsFixer::class => null]);
    $services = $containerConfigurator->services();
    $services->set(NoUnusedImportsFixer::class);
};
