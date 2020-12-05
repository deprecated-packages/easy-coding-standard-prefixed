<?php

namespace _PhpScoper02b5d1bf8fec\Psr\Log;

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
    public function setLogger(\_PhpScoper02b5d1bf8fec\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
