<?php

namespace _PhpScoperd32e35cfad84\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoperd32e35cfad84\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
