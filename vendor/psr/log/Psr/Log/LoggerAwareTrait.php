<?php

namespace _PhpScopera6f918786d5c\Psr\Log;

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
    public function setLogger(\_PhpScopera6f918786d5c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
