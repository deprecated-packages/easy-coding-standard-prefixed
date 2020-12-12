<?php

namespace _PhpScoper326bba7310a2\Psr\Log;

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
    public function setLogger(\_PhpScoper326bba7310a2\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
