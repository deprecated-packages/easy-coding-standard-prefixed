<?php

namespace _PhpScoperc5e9eb67638f\Psr\Log;

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
    public function setLogger(\_PhpScoperc5e9eb67638f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
