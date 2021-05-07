<?php

namespace _PhpScopercae9e6ab5cea\Psr\Log;

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
    public function setLogger(\_PhpScopercae9e6ab5cea\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
