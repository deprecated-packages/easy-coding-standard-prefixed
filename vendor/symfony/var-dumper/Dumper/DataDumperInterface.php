<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper578a67c80b2b\Symfony\Component\VarDumper\Dumper;

use _PhpScoper578a67c80b2b\Symfony\Component\VarDumper\Cloner\Data;
/**
 * DataDumperInterface for dumping Data objects.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface DataDumperInterface
{
    public function dump(\_PhpScoper578a67c80b2b\Symfony\Component\VarDumper\Cloner\Data $data);
}
