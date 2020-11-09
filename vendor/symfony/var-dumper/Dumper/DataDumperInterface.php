<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere015d8a3273c\Symfony\Component\VarDumper\Dumper;

use _PhpScopere015d8a3273c\Symfony\Component\VarDumper\Cloner\Data;
/**
 * DataDumperInterface for dumping Data objects.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface DataDumperInterface
{
    public function dump(\_PhpScopere015d8a3273c\Symfony\Component\VarDumper\Cloner\Data $data);
}
