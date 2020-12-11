<?php

namespace _PhpScoper23ef26a4fb01\Psr\Log;

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
    public function setLogger(\_PhpScoper23ef26a4fb01\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
