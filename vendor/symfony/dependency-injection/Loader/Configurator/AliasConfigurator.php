<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Loader\Configurator;

use _PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Alias;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AliasConfigurator extends \_PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Loader\Configurator\AbstractServiceConfigurator
{
    const FACTORY = 'alias';
    use Traits\DeprecateTrait;
    use Traits\PublicTrait;
    public function __construct(\_PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Loader\Configurator\ServicesConfigurator $parent, \_PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Alias $alias)
    {
        $this->parent = $parent;
        $this->definition = $alias;
    }
}
