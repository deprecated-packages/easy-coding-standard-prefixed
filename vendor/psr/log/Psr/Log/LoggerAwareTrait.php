<?php

namespace _PhpScoperd1a5bf00e83e\Psr\Log;

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
    public function setLogger(\_PhpScoperd1a5bf00e83e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
