<?php

declare (strict_types=1);
namespace _PhpScoper91fe47cd7f25;

use _PhpScoper91fe47cd7f25\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(SetList::ARRAY);
};
