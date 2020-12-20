<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperba24099fc6fd\Symfony\Component\VarDumper\Caster;

use _PhpScoperba24099fc6fd\Symfony\Component\VarDumper\Cloner\Stub;
/**
 * Represents an enumeration of values.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class EnumStub extends \_PhpScoperba24099fc6fd\Symfony\Component\VarDumper\Cloner\Stub
{
    public $dumpKeys = \true;
    public function __construct(array $values, bool $dumpKeys = \true)
    {
        $this->value = $values;
        $this->dumpKeys = $dumpKeys;
    }
}
