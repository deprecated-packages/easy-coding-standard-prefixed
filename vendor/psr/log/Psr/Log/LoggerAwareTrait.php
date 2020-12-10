<?php

namespace _PhpScoper2731c1906fe4\Psr\Log;

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
    public function setLogger(\_PhpScoper2731c1906fe4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
