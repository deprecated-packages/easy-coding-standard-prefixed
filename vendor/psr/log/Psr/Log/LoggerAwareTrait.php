<?php

namespace _PhpScoper7145e5e87de5\Psr\Log;

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
    public function setLogger(\_PhpScoper7145e5e87de5\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
