<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfcee700af3df\Symfony\Component\VarDumper\Command\Descriptor;

use _PhpScoperfcee700af3df\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperfcee700af3df\Symfony\Component\VarDumper\Cloner\Data;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface DumpDescriptorInterface
{
    public function describe(\_PhpScoperfcee700af3df\Symfony\Component\Console\Output\OutputInterface $output, \_PhpScoperfcee700af3df\Symfony\Component\VarDumper\Cloner\Data $data, array $context, int $clientId) : void;
}
