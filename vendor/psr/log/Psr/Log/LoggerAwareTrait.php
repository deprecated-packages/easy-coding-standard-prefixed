<?php

namespace _PhpScopere106f9fd4493\Psr\Log;

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
    public function setLogger(\_PhpScopere106f9fd4493\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
