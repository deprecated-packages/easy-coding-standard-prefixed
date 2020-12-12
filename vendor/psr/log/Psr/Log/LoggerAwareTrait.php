<?php

namespace _PhpScoper83b3b9a317c0\Psr\Log;

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
    public function setLogger(\_PhpScoper83b3b9a317c0\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
