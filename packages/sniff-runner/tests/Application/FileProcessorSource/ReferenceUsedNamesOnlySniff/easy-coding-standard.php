<?php

declare (strict_types=1);
namespace _PhpScoper8ca6426d4e0c;

use SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff;
use _PhpScoper8ca6426d4e0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8ca6426d4e0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff::class)->property('searchAnnotations', \true);
};
