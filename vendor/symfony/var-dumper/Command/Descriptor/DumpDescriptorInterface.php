<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperddde3ba4aebc\Symfony\Component\VarDumper\Command\Descriptor;

use _PhpScoperddde3ba4aebc\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperddde3ba4aebc\Symfony\Component\VarDumper\Cloner\Data;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface DumpDescriptorInterface
{
    public function describe(\_PhpScoperddde3ba4aebc\Symfony\Component\Console\Output\OutputInterface $output, \_PhpScoperddde3ba4aebc\Symfony\Component\VarDumper\Cloner\Data $data, array $context, int $clientId) : void;
}
