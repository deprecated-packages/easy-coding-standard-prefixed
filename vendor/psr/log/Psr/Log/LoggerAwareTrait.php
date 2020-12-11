<?php

namespace _PhpScopera061b8a47e36\Psr\Log;

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
    public function setLogger(\_PhpScopera061b8a47e36\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
