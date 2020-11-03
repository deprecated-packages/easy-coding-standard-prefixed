<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper83a475a0590e\Symfony\Component\DependencyInjection\LazyProxy\PhpDumper;

use _PhpScoper83a475a0590e\Symfony\Component\DependencyInjection\Definition;
/**
 * Null dumper, negates any proxy code generation for any given service definition.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 *
 * @final
 */
class NullDumper implements \_PhpScoper83a475a0590e\Symfony\Component\DependencyInjection\LazyProxy\PhpDumper\DumperInterface
{
    /**
     * {@inheritdoc}
     */
    public function isProxyCandidate(\_PhpScoper83a475a0590e\Symfony\Component\DependencyInjection\Definition $definition) : bool
    {
        return \false;
    }
    /**
     * {@inheritdoc}
     */
    public function getProxyFactoryCode(\_PhpScoper83a475a0590e\Symfony\Component\DependencyInjection\Definition $definition, $id, $factoryCode = null) : string
    {
        return '';
    }
    /**
     * {@inheritdoc}
     */
    public function getProxyCode(\_PhpScoper83a475a0590e\Symfony\Component\DependencyInjection\Definition $definition) : string
    {
        return '';
    }
}
