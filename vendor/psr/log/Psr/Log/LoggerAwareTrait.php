<?php

namespace _PhpScoper7f5523334c1b\Psr\Log;

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
    public function setLogger(\_PhpScoper7f5523334c1b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
