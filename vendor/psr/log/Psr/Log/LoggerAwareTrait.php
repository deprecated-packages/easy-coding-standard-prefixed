<?php

namespace _PhpScoper0d0ee1ba46d4\Psr\Log;

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
    public function setLogger(\_PhpScoper0d0ee1ba46d4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
