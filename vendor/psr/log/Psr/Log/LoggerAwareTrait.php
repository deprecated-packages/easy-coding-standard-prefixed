<?php

namespace _PhpScoper224ae0b86670\Psr\Log;

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
    public function setLogger(\_PhpScoper224ae0b86670\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
