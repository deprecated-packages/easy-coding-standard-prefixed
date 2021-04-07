<?php

declare (strict_types=1);
namespace _PhpScoper14718bfcc75e;

use _PhpScoper14718bfcc75e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper14718bfcc75e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(__DIR__ . '/another-one.php');
};
