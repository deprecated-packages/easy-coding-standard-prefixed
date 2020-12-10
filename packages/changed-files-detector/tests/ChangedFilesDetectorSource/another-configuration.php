<?php

declare (strict_types=1);
namespace _PhpScoper4edd80b4ab80;

use _PhpScoper4edd80b4ab80\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4edd80b4ab80\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set('one', 'configuration-2');
};
