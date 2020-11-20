<?php

namespace _PhpScoper5a9febfbbe05\Psr\Log;

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
    public function setLogger(\_PhpScoper5a9febfbbe05\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
