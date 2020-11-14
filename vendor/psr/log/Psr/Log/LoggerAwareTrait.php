<?php

namespace _PhpScoperecb978830f1e\Psr\Log;

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
    public function setLogger(\_PhpScoperecb978830f1e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
