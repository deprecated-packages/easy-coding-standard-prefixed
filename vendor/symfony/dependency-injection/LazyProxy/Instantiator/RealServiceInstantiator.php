<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper70072c07b02b\Symfony\Component\DependencyInjection\LazyProxy\Instantiator;

use _PhpScoper70072c07b02b\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoper70072c07b02b\Symfony\Component\DependencyInjection\Definition;
/**
 * {@inheritdoc}
 *
 * Noop proxy instantiator - produces the real service instead of a proxy instance.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class RealServiceInstantiator implements \_PhpScoper70072c07b02b\Symfony\Component\DependencyInjection\LazyProxy\Instantiator\InstantiatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function instantiateProxy(\_PhpScoper70072c07b02b\Symfony\Component\DependencyInjection\ContainerInterface $container, \_PhpScoper70072c07b02b\Symfony\Component\DependencyInjection\Definition $definition, $id, $realInstantiator)
    {
        return $realInstantiator();
    }
}
