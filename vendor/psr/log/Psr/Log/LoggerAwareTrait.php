<?php

namespace _PhpScoperfde42a25c345\Psr\Log;

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
    public function setLogger(\_PhpScoperfde42a25c345\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
