<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd47a2fa2a77e\Symfony\Component\Console\Event;

use _PhpScoperd47a2fa2a77e\Symfony\Component\Console\Command\Command;
use _PhpScoperd47a2fa2a77e\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperd47a2fa2a77e\Symfony\Component\Console\Output\OutputInterface;
/**
 * Allows to manipulate the exit code of a command after its execution.
 *
 * @author Francesco Levorato <git@flevour.net>
 */
final class ConsoleTerminateEvent extends \_PhpScoperd47a2fa2a77e\Symfony\Component\Console\Event\ConsoleEvent
{
    private $exitCode;
    public function __construct(\_PhpScoperd47a2fa2a77e\Symfony\Component\Console\Command\Command $command, \_PhpScoperd47a2fa2a77e\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperd47a2fa2a77e\Symfony\Component\Console\Output\OutputInterface $output, int $exitCode)
    {
        parent::__construct($command, $input, $output);
        $this->setExitCode($exitCode);
    }
    public function setExitCode(int $exitCode) : void
    {
        $this->exitCode = $exitCode;
    }
    public function getExitCode() : int
    {
        return $this->exitCode;
    }
}
