<?php

namespace _PhpScoper7108c819f5c5\Psr\Log;

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
    public function setLogger(\_PhpScoper7108c819f5c5\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
