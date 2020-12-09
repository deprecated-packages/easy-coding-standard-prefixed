<?php

namespace _PhpScoperdf15f2b748e9\Psr\Log;

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
    public function setLogger(\_PhpScoperdf15f2b748e9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
