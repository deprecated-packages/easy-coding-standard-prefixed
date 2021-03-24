<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc98ae2003489\Symfony\Component\Console\Event;

use _PhpScoperc98ae2003489\Symfony\Component\Console\Command\Command;
use _PhpScoperc98ae2003489\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperc98ae2003489\Symfony\Component\Console\Output\OutputInterface;
/**
 * @author marie <marie@users.noreply.github.com>
 */
final class ConsoleSignalEvent extends \_PhpScoperc98ae2003489\Symfony\Component\Console\Event\ConsoleEvent
{
    private $handlingSignal;
    public function __construct(\_PhpScoperc98ae2003489\Symfony\Component\Console\Command\Command $command, \_PhpScoperc98ae2003489\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperc98ae2003489\Symfony\Component\Console\Output\OutputInterface $output, int $handlingSignal)
    {
        parent::__construct($command, $input, $output);
        $this->handlingSignal = $handlingSignal;
    }
    public function getHandlingSignal() : int
    {
        return $this->handlingSignal;
    }
}
