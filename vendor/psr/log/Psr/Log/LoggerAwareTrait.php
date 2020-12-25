<?php

namespace _PhpScoper592524ba34f0\Psr\Log;

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
    public function setLogger(\_PhpScoper592524ba34f0\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
