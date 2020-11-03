<?php

namespace _PhpScopera238de2e9b5a\Psr\Log;

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
    public function setLogger(\_PhpScopera238de2e9b5a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
