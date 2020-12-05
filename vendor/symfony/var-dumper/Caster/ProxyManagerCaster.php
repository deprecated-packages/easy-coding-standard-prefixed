<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper02b5d1bf8fec\Symfony\Component\VarDumper\Caster;

use _PhpScoper02b5d1bf8fec\ProxyManager\Proxy\ProxyInterface;
use _PhpScoper02b5d1bf8fec\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class ProxyManagerCaster
{
    public static function castProxy(\_PhpScoper02b5d1bf8fec\ProxyManager\Proxy\ProxyInterface $c, array $a, \_PhpScoper02b5d1bf8fec\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested)
    {
        if ($parent = \get_parent_class($c)) {
            $stub->class .= ' - ' . $parent;
        }
        $stub->class .= '@proxy';
        return $a;
    }
}
