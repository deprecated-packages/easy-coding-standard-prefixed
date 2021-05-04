<?php

namespace _PhpScopercfeba9d8ad31\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface|null
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScopercfeba9d8ad31\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
