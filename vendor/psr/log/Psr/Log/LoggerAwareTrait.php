<?php

namespace _PhpScoper2a48669dad72\Psr\Log;

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
    public function setLogger(\_PhpScoper2a48669dad72\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
