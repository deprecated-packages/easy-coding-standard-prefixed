<?php

namespace _PhpScoperf7b66f9e3817\Psr\Log;

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
    public function setLogger(\_PhpScoperf7b66f9e3817\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
