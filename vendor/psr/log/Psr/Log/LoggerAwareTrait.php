<?php

namespace _PhpScoper0c575b5c37d7\Psr\Log;

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
    public function setLogger(\_PhpScoper0c575b5c37d7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
