<?php

namespace _PhpScoper7c3fefba1fb9\Psr\Log;

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
    public function setLogger(\_PhpScoper7c3fefba1fb9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
