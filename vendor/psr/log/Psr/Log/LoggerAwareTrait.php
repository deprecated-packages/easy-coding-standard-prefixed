<?php

namespace _PhpScopera88a8b9f064a\Psr\Log;

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
    public function setLogger(\_PhpScopera88a8b9f064a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
