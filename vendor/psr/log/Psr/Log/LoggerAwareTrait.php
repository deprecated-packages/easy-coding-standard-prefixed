<?php

namespace _PhpScoperae959d396e95\Psr\Log;

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
    public function setLogger(\_PhpScoperae959d396e95\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
