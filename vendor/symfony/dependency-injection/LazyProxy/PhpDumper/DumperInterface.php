<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\LazyProxy\PhpDumper;

use _PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Definition;
/**
 * Lazy proxy dumper capable of generating the instantiation logic PHP code for proxied services.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
interface DumperInterface
{
    /**
     * Inspects whether the given definitions should produce proxy instantiation logic in the dumped container.
     *
     * @return bool
     */
    public function isProxyCandidate(\_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Definition $definition);
    /**
     * Generates the code to be used to instantiate a proxy in the dumped factory code.
     *
     * @return string
     */
    public function getProxyFactoryCode(\_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Definition $definition, string $id, string $factoryCode);
    /**
     * Generates the code for the lazy proxy.
     *
     * @return string
     */
    public function getProxyCode(\_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Definition $definition);
}
