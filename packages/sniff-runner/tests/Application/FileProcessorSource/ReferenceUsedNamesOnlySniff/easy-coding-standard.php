<?php

declare (strict_types=1);
namespace _PhpScoperf3dc21757def;

use SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff;
use _PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff::class)->property('searchAnnotations', \true);
};
