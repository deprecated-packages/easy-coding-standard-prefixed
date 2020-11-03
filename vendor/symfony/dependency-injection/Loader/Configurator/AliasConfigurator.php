<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Loader\Configurator;

use _PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Alias;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AliasConfigurator extends \_PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Loader\Configurator\AbstractServiceConfigurator
{
    const FACTORY = 'alias';
    use Traits\PublicTrait;
    public function __construct(\_PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Loader\Configurator\ServicesConfigurator $parent, \_PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Alias $alias)
    {
        $this->parent = $parent;
        $this->definition = $alias;
    }
}
