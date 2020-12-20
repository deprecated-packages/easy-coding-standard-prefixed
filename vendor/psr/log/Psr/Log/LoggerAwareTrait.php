<?php

namespace _PhpScoper9885c8c176c7\Psr\Log;

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
    public function setLogger(\_PhpScoper9885c8c176c7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
