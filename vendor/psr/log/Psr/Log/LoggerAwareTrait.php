<?php

namespace _PhpScoper5f6e904600e7\Psr\Log;

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
    public function setLogger(\_PhpScoper5f6e904600e7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
