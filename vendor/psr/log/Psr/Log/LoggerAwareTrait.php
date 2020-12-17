<?php

namespace _PhpScopercf909b66eba8\Psr\Log;

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
    public function setLogger(\_PhpScopercf909b66eba8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
