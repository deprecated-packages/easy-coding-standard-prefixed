<?php

declare (strict_types=1);
namespace _PhpScoperd2a667bd5a98;

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use _PhpScoperd2a667bd5a98\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SKIP, [NoUnusedImportsFixer::class => null]);
    $services = $containerConfigurator->services();
    $services->set(NoUnusedImportsFixer::class);
};
