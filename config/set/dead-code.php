<?php

declare (strict_types=1);
namespace _PhpScoper6ffa0951a2e9;

use _PhpScoper6ffa0951a2e9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    \trigger_error('ECS set DEAD_CODE is deprecated. Use more advanced and precise Rector set https://github.com/rectorphp/rector/blob/master/config/set/dead-code.php instead.');
    \sleep(3);
};
