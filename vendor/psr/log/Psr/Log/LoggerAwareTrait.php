<?php

namespace _PhpScoper992f4af8b9e0\Psr\Log;

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
    public function setLogger(\_PhpScoper992f4af8b9e0\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
