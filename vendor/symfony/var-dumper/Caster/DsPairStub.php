<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Caster;

use _PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DsPairStub extends Stub
{
    public function __construct($key, $value)
    {
        $this->value = [\_PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'key' => $key, \_PhpScopercfeba9d8ad31\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'value' => $value];
    }
}
