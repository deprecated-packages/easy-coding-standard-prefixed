<?php

namespace _PhpScoper4575b9150b52\Psr\Log;

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
    public function setLogger(\_PhpScoper4575b9150b52\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
