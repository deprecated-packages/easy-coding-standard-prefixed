<?php

namespace _PhpScoperfabf55fef6b7\Psr\Log;

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
    public function setLogger(\_PhpScoperfabf55fef6b7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
