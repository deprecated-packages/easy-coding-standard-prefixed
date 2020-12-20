<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Command\Descriptor;

use _PhpScoperab9510cd5d97\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Cloner\Data;
/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface DumpDescriptorInterface
{
    public function describe(\_PhpScoperab9510cd5d97\Symfony\Component\Console\Output\OutputInterface $output, \_PhpScoperab9510cd5d97\Symfony\Component\VarDumper\Cloner\Data $data, array $context, int $clientId) : void;
}
