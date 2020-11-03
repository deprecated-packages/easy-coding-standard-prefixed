<?php

namespace _PhpScopercf327c47dfc5\Psr\Log;

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
    public function setLogger(\_PhpScopercf327c47dfc5\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
