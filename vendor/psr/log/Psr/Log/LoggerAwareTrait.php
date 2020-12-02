<?php

namespace _PhpScopera23ebff5477f\Psr\Log;

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
    public function setLogger(\_PhpScopera23ebff5477f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
