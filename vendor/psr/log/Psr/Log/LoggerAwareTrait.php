<?php

namespace _PhpScopera51a90153f58\Psr\Log;

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
    public function setLogger(\_PhpScopera51a90153f58\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
