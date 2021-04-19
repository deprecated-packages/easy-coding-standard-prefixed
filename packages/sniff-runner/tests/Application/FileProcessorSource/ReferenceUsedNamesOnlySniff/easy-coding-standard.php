<?php

declare (strict_types=1);
namespace _PhpScoper855b7fb41c61;

use SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff;
use _PhpScoper855b7fb41c61\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(ReferenceUsedNamesOnlySniff::class)->property('searchAnnotations', \true);
};
