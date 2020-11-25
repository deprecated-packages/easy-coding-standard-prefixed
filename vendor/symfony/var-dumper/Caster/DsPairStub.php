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

use _PhpScoperdc8fbcd7c69d\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DsPairStub extends \_PhpScoperdc8fbcd7c69d\Symfony\Component\VarDumper\Cloner\Stub
{
    public function __construct($key, $value)
    {
        $this->value = [\_PhpScoperdc8fbcd7c69d\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'key' => $key, \_PhpScoperdc8fbcd7c69d\Symfony\Component\VarDumper\Caster\Caster::PREFIX_VIRTUAL . 'value' => $value];
    }
}
