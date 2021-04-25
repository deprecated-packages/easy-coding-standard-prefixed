<?php

declare (strict_types=1);
namespace _PhpScoper4fedb9aa1e5f;

use SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff;
use _PhpScoper4fedb9aa1e5f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(ReferenceUsedNamesOnlySniff::class)->property('searchAnnotations', \true);
};
