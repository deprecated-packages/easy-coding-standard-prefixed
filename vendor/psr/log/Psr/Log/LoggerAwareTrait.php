<?php

namespace _PhpScoperfd70a7e8e84f\Psr\Log;

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
    public function setLogger(\_PhpScoperfd70a7e8e84f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
