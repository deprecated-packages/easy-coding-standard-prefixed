<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\Skipper\ValueObject\Option;
return static function (\_PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\Skipper\ValueObject\Option::SKIP, [
        // windows slashes
        __DIR__ . '\\non-existing-path',
        __DIR__ . '/../Fixture',
        '*\\Mask\\*',
    ]);
};
