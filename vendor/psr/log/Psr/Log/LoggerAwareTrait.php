<?php

namespace _PhpScoperc4ea0f0bd23f\Psr\Log;

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
    public function setLogger(\_PhpScoperc4ea0f0bd23f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
