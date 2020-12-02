<?php

namespace _PhpScoper6a0a7eb6e565\Psr\Log;

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
    public function setLogger(\_PhpScoper6a0a7eb6e565\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
