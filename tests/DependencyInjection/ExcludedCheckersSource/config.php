<?php

declare (strict_types=1);
namespace _PhpScoper3c4e863e8a34;

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use _PhpScoper3c4e863e8a34\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SKIP, [NoUnusedImportsFixer::class => null]);
    $services = $containerConfigurator->services();
    $services->set(NoUnusedImportsFixer::class);
};
