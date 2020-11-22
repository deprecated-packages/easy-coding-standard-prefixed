<?php

namespace _PhpScoper6db4fde00cda\Psr\Log;

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
    public function setLogger(\_PhpScoper6db4fde00cda\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
