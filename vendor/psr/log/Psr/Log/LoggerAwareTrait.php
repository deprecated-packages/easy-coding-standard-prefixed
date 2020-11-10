<?php

namespace _PhpScopere5e7dca8c031\Psr\Log;

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
    public function setLogger(\_PhpScopere5e7dca8c031\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
