<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper57272265e1c9\Symfony\Component\VarDumper\Command\Descriptor;

use _PhpScoper57272265e1c9\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper57272265e1c9\Symfony\Component\VarDumper\Cloner\Data;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface DumpDescriptorInterface
{
    public function describe(\_PhpScoper57272265e1c9\Symfony\Component\Console\Output\OutputInterface $output, \_PhpScoper57272265e1c9\Symfony\Component\VarDumper\Cloner\Data $data, array $context, int $clientId) : void;
}
