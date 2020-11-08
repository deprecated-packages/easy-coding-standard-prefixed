<?php

namespace _PhpScoper190659c42b56\Psr\Log;

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
    public function setLogger(\_PhpScoper190659c42b56\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
