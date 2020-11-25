<?php

namespace _PhpScoper13133e188f67\Psr\Log;

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
    public function setLogger(\_PhpScoper13133e188f67\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
