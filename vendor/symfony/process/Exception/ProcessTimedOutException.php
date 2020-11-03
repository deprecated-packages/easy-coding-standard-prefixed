<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5928e324b45e\Symfony\Component\Process\Exception;

use _PhpScoper5928e324b45e\Symfony\Component\Process\Process;
/**
 * Exception that is thrown when a process times out.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ProcessTimedOutException extends \_PhpScoper5928e324b45e\Symfony\Component\Process\Exception\RuntimeException
{
    const TYPE_GENERAL = 1;
    const TYPE_IDLE = 2;
    private $process;
    private $timeoutType;
    public function __construct(\_PhpScoper5928e324b45e\Symfony\Component\Process\Process $process, $timeoutType)
    {
        $this->process = $process;
        $this->timeoutType = $timeoutType;
        parent::__construct(\sprintf('The process "%s" exceeded the timeout of %s seconds.', $process->getCommandLine(), $this->getExceededTimeout()));
    }
    public function getProcess()
    {
        return $this->process;
    }
    public function isGeneralTimeout()
    {
        return $this->timeoutType === self::TYPE_GENERAL;
    }
    public function isIdleTimeout()
    {
        return $this->timeoutType === self::TYPE_IDLE;
    }
    public function getExceededTimeout()
    {
        switch ($this->timeoutType) {
            case self::TYPE_GENERAL:
                return $this->process->getTimeout();
            case self::TYPE_IDLE:
                return $this->process->getIdleTimeout();
            default:
                throw new \LogicException(\sprintf('Unknown timeout type "%d".', $this->timeoutType));
        }
    }
}
