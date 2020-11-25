<?php

namespace _PhpScoper38a7d00685f8\Psr\Log;

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
    public function setLogger(\_PhpScoper38a7d00685f8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
