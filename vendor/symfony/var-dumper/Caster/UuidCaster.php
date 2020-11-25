<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdc8fbcd7c69d\Symfony\Component\VarDumper\Caster;

use _PhpScoperdc8fbcd7c69d\Ramsey\Uuid\UuidInterface;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
final class UuidCaster
{
    public static function castRamseyUuid(\_PhpScoperdc8fbcd7c69d\Ramsey\Uuid\UuidInterface $c, array $a, \_PhpScoperdc8fbcd7c69d\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested) : array
    {
        $a += [\_PhpScoperdc8fbcd7c69d\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'uuid' => (string) $c];
        return $a;
    }
}
