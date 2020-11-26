<?php

namespace _PhpScoperb2e2c0c42e71\Psr\Log;

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
    public function setLogger(\_PhpScoperb2e2c0c42e71\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
