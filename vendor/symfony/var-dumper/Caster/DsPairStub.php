<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Caster;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DsPairStub extends \_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Cloner\Stub
{
    public function __construct($key, $value)
    {
        $this->value = [\_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'key' => $key, \_PhpScoperc4ea0f0bd23f\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'value' => $value];
    }
}
