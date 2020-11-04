<?php

namespace _PhpScoper75713bc3e278\Psr\Log;

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
    public function setLogger(\_PhpScoper75713bc3e278\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
