<?php

namespace _PhpScoper5c006f5f032f\Psr\Log;

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
    public function setLogger(\_PhpScoper5c006f5f032f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
