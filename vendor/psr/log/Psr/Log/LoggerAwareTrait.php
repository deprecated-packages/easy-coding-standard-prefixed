<?php

namespace _PhpScopera34ae19e8d40\Psr\Log;

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
    public function setLogger(\_PhpScopera34ae19e8d40\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
