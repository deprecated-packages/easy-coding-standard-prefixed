<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfabf55fef6b7\Symfony\Component\VarDumper\Command\Descriptor;

use _PhpScoperfabf55fef6b7\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperfabf55fef6b7\Symfony\Component\VarDumper\Cloner\Data;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface DumpDescriptorInterface
{
    public function describe(\_PhpScoperfabf55fef6b7\Symfony\Component\Console\Output\OutputInterface $output, \_PhpScoperfabf55fef6b7\Symfony\Component\VarDumper\Cloner\Data $data, array $context, int $clientId) : void;
}
