<?php

namespace _PhpScopera04bf8e97c06\Psr\Log;

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
    public function setLogger(\_PhpScopera04bf8e97c06\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
