<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbc5235eb86f3\Symfony\Component\VarDumper\Caster;

use _PhpScoperbc5235eb86f3\Doctrine\Common\Proxy\Proxy as CommonProxy;
use _PhpScoperbc5235eb86f3\Doctrine\ORM\PersistentCollection;
use _PhpScoperbc5235eb86f3\Doctrine\ORM\Proxy\Proxy as OrmProxy;
use _PhpScoperbc5235eb86f3\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * Casts Doctrine related classes to array representation.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final since Symfony 4.4
 */
class DoctrineCaster
{
    public static function castCommonProxy(\_PhpScoperbc5235eb86f3\Doctrine\Common\Proxy\Proxy $proxy, array $a, \_PhpScoperbc5235eb86f3\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        foreach (['__cloner__', '__initializer__'] as $k) {
            if (\array_key_exists($k, $a)) {
                unset($a[$k]);
                ++$stub->cut;
            }
        }
        return $a;
    }
    public static function castOrmProxy(\_PhpScoperbc5235eb86f3\Doctrine\ORM\Proxy\Proxy $proxy, array $a, \_PhpScoperbc5235eb86f3\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        foreach (['_entityPersister', '_identifier'] as $k) {
            if (\array_key_exists($k = "\0Doctrine\\ORM\\Proxy\\Proxy\0" . $k, $a)) {
                unset($a[$k]);
                ++$stub->cut;
            }
        }
        return $a;
    }
    public static function castPersistentCollection(\_PhpScoperbc5235eb86f3\Doctrine\ORM\PersistentCollection $coll, array $a, \_PhpScoperbc5235eb86f3\Symfony\Component\VarDumper\Cloner\Stub $stub, $isNested)
    {
        foreach (['snapshot', 'association', 'typeClass'] as $k) {
            if (\array_key_exists($k = "\0Doctrine\\ORM\\PersistentCollection\0" . $k, $a)) {
                $a[$k] = new \_PhpScoperbc5235eb86f3\Symfony\Component\VarDumper\Caster\CutStub($a[$k]);
            }
        }
        return $a;
    }
}
