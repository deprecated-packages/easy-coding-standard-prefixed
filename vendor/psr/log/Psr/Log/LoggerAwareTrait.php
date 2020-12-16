<?php

namespace _PhpScoperd35c27cd4b09\Psr\Log;

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
    public function setLogger(\_PhpScoperd35c27cd4b09\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
