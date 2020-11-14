<?php

namespace _PhpScopera749ac204cd2\Psr\Log;

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
    public function setLogger(\_PhpScopera749ac204cd2\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
