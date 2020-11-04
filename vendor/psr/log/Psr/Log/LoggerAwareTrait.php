<?php

namespace _PhpScoper48b5ec5b60cf\Psr\Log;

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
    public function setLogger(\_PhpScoper48b5ec5b60cf\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
