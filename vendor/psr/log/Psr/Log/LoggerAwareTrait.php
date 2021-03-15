<?php

namespace _PhpScoper8163b0b2b8f3\Psr\Log;

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
    public function setLogger(\_PhpScoper8163b0b2b8f3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
