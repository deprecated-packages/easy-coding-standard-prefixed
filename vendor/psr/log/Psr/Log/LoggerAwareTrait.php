<?php

namespace _PhpScoper89ec3c69e67d\Psr\Log;

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
    public function setLogger(\_PhpScoper89ec3c69e67d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
