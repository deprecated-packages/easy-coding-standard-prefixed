<?php

namespace _PhpScoperf5f75c22067b\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /** @var LoggerInterface */
    protected $logger;
    /**
     * Sets a logger.
     * 
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoperf5f75c22067b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
