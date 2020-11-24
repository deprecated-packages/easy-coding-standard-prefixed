<?php

namespace _PhpScoperf3d5f0921050\Psr\Log;

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
    public function setLogger(\_PhpScoperf3d5f0921050\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
