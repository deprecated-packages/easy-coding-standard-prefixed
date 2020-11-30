<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera09818bc50da\Symfony\Component\VarDumper\Command\Descriptor;

use _PhpScopera09818bc50da\Symfony\Component\Console\Output\OutputInterface;
use _PhpScopera09818bc50da\Symfony\Component\VarDumper\Cloner\Data;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface DumpDescriptorInterface
{
    public function describe(\_PhpScopera09818bc50da\Symfony\Component\Console\Output\OutputInterface $output, \_PhpScopera09818bc50da\Symfony\Component\VarDumper\Cloner\Data $data, array $context, int $clientId) : void;
}
