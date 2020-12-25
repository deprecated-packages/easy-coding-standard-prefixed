<?php

namespace _PhpScoper745103eaabcd\Psr\Log;

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
    public function setLogger(\_PhpScoper745103eaabcd\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
