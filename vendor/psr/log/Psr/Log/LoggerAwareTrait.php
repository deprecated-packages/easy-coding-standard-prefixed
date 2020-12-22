<?php

namespace _PhpScoper57272265e1c9\Psr\Log;

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
    public function setLogger(\_PhpScoper57272265e1c9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
