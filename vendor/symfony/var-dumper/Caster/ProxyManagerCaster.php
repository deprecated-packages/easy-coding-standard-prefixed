<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaba240c3d5f1\Symfony\Component\VarDumper\Caster;

use _PhpScoperaba240c3d5f1\ProxyManager\Proxy\ProxyInterface;
use _PhpScoperaba240c3d5f1\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class ProxyManagerCaster
{
    public static function castProxy(\_PhpScoperaba240c3d5f1\ProxyManager\Proxy\ProxyInterface $c, array $a, \_PhpScoperaba240c3d5f1\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested)
    {
        if ($parent = \get_parent_class($c)) {
            $stub->class .= ' - ' . $parent;
        }
        $stub->class .= '@proxy';
        return $a;
    }
}
