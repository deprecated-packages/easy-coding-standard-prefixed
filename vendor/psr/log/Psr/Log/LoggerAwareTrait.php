<?php

namespace _PhpScoperf65af7a6d9a0\Psr\Log;

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
    public function setLogger(\_PhpScoperf65af7a6d9a0\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
