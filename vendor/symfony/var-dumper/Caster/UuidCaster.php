<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper06c5fb6c14ed\Symfony\Component\VarDumper\Caster;

use _PhpScoper06c5fb6c14ed\Ramsey\Uuid\UuidInterface;
use _PhpScoper06c5fb6c14ed\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
final class UuidCaster
{
    public static function castRamseyUuid(\_PhpScoper06c5fb6c14ed\Ramsey\Uuid\UuidInterface $c, array $a, \_PhpScoper06c5fb6c14ed\Symfony\Component\VarDumper\Cloner\Stub $stub, bool $isNested) : array
    {
        $a += [\_PhpScoper06c5fb6c14ed\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'uuid' => (string) $c];
        return $a;
    }
}
