<?php

namespace _PhpScopercb217fd4e736\Psr\Log;

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
    public function setLogger(\_PhpScopercb217fd4e736\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
