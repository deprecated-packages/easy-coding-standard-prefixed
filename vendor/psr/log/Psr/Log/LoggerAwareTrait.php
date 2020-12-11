<?php

namespace _PhpScopere4fa57261c04\Psr\Log;

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
    public function setLogger(\_PhpScopere4fa57261c04\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
