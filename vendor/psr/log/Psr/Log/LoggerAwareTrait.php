<?php

namespace _PhpScoper58a0a169dcfb\Psr\Log;

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
    public function setLogger(\_PhpScoper58a0a169dcfb\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
