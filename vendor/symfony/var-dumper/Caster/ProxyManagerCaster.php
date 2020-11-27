<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper578a67c80b2b\Symfony\Component\VarDumper\Caster;

use _PhpScoper578a67c80b2b\ProxyManager\Proxy\ProxyInterface;
use _PhpScoper578a67c80b2b\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final since Symfony 4.4
 */
class ProxyManagerCaster
{
    public static function castProxy(\_PhpScoper578a67c80b2b\ProxyManager\Proxy\ProxyInterface $c, array $a, \_PhpScoper578a67c80b2b\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        if ($parent = \get_parent_class($c)) {
            $stub->class .= ' - ' . $parent;
        }
        $stub->class .= '@proxy';
        return $a;
    }
}
