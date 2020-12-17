<?php

namespace _PhpScoperfa7254c25e18\Psr\Log;

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
    public function setLogger(\_PhpScoperfa7254c25e18\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
