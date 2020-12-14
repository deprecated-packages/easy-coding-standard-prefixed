<?php

namespace _PhpScoper8a0112f19f39\Psr\Log;

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
    public function setLogger(\_PhpScoper8a0112f19f39\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
