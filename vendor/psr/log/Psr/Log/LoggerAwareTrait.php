<?php

namespace _PhpScoper133be48300f9\Psr\Log;

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
    public function setLogger(\_PhpScoper133be48300f9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
