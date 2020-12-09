<?php

namespace _PhpScoper9b9ddfd01528\Psr\Log;

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
    public function setLogger(\_PhpScoper9b9ddfd01528\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
