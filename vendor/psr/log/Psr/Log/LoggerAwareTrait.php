<?php

namespace _PhpScoper065e4ba46e6d\Psr\Log;

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
    public function setLogger(\_PhpScoper065e4ba46e6d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
