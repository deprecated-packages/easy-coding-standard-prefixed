<?php

namespace _PhpScoper0270f1d35181\Psr\Log;

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
    public function setLogger(\_PhpScoper0270f1d35181\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
