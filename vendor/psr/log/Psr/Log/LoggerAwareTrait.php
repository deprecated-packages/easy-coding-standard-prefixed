<?php

namespace _PhpScoper28ab463fc3ba\Psr\Log;

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
    public function setLogger(\_PhpScoper28ab463fc3ba\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
