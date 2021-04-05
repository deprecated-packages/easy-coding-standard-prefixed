<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\LazyProxy\Instantiator;

use _PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Definition;
/**
 * Lazy proxy instantiator, capable of instantiating a proxy given a container, the
 * service definitions and a callback that produces the real service instance.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
interface InstantiatorInterface
{
    /**
     * Instantiates a proxy object.
     *
     * @param string   $id               Identifier of the requested service
     * @param callable $realInstantiator Zero-argument callback that is capable of producing the real service instance
     *
     * @return object
     */
    public function instantiateProxy(\_PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\ContainerInterface $container, \_PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Definition $definition, string $id, callable $realInstantiator);
}
