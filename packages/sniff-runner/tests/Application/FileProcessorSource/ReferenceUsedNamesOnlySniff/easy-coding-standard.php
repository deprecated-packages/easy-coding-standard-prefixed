<?php

declare (strict_types=1);
namespace _PhpScoper326bba7310a2;

use SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff;
use _PhpScoper326bba7310a2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper326bba7310a2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff::class)->property('searchAnnotations', \true);
};
