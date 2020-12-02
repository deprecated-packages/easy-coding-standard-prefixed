<?php

namespace _PhpScoperf62d28230928\Psr\Log;

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
    public function setLogger(\_PhpScoperf62d28230928\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
