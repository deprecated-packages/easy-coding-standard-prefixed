<?php

namespace _PhpScoperb6d4bd368bd9\Psr\Log;

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
    public function setLogger(\_PhpScoperb6d4bd368bd9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
