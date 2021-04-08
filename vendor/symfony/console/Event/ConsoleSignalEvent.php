<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera909b9d9be2e\Symfony\Component\Console\Event;

use _PhpScopera909b9d9be2e\Symfony\Component\Console\Command\Command;
use _PhpScopera909b9d9be2e\Symfony\Component\Console\Input\InputInterface;
use _PhpScopera909b9d9be2e\Symfony\Component\Console\Output\OutputInterface;
/**
 * @author marie <marie@users.noreply.github.com>
 */
final class ConsoleSignalEvent extends \_PhpScopera909b9d9be2e\Symfony\Component\Console\Event\ConsoleEvent
{
    private $handlingSignal;
    public function __construct(\_PhpScopera909b9d9be2e\Symfony\Component\Console\Command\Command $command, \_PhpScopera909b9d9be2e\Symfony\Component\Console\Input\InputInterface $input, \_PhpScopera909b9d9be2e\Symfony\Component\Console\Output\OutputInterface $output, int $handlingSignal)
    {
        parent::__construct($command, $input, $output);
        $this->handlingSignal = $handlingSignal;
    }
    public function getHandlingSignal() : int
    {
        return $this->handlingSignal;
    }
}
