<?php

namespace _PhpScoper6a1dd9b8a650\Psr\Log;

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
    public function setLogger(\_PhpScoper6a1dd9b8a650\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
