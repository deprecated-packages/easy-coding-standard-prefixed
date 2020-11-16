<?php

namespace _PhpScoperdf6a0b341030\Psr\Log;

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
    public function setLogger(\_PhpScoperdf6a0b341030\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
