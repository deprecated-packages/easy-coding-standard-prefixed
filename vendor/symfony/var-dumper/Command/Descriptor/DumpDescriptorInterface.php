<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf5c57eca8aae\Symfony\Component\VarDumper\Command\Descriptor;

use _PhpScoperf5c57eca8aae\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperf5c57eca8aae\Symfony\Component\VarDumper\Cloner\Data;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface DumpDescriptorInterface
{
    public function describe(\_PhpScoperf5c57eca8aae\Symfony\Component\Console\Output\OutputInterface $output, \_PhpScoperf5c57eca8aae\Symfony\Component\VarDumper\Cloner\Data $data, array $context, int $clientId) : void;
}
