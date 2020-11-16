<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperedc2e0c967db\Symfony\Component\VarDumper\Command\Descriptor;

use _PhpScoperedc2e0c967db\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\VarDumper\Cloner\Data;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface DumpDescriptorInterface
{
    public function describe(\_PhpScoperedc2e0c967db\Symfony\Component\Console\Output\OutputInterface $output, \_PhpScoperedc2e0c967db\Symfony\Component\VarDumper\Cloner\Data $data, array $context, int $clientId) : void;
}
