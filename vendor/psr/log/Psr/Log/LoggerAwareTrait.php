<?php

namespace _PhpScoperf3f1be0d8a30\Psr\Log;

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
    public function setLogger(\_PhpScoperf3f1be0d8a30\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
