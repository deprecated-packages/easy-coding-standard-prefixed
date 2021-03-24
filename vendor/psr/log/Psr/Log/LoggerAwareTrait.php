<?php

namespace _PhpScopere66f4b626446\Psr\Log;

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
    public function setLogger(\_PhpScopere66f4b626446\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
