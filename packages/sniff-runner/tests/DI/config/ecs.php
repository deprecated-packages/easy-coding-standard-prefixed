<?php

declare (strict_types=1);
namespace _PhpScoper6ffa0951a2e9;

use _PhpScoper6ffa0951a2e9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\SniffRunner\Tests\DI\Source\AnotherSniff;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(AnotherSniff::class)->property('lineLimit', 15)->property('absoluteLineLimit', [
        // just test array of annotations
        '@author',
    ]);
};
