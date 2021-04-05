<?php

namespace _PhpScoperf6b7f9bf122d\Psr\Log;

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
    public function setLogger(\_PhpScoperf6b7f9bf122d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
