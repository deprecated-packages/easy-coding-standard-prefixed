<?php

namespace _PhpScoper246d7c16d32f\Psr\Log;

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
    public function setLogger(\_PhpScoper246d7c16d32f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
