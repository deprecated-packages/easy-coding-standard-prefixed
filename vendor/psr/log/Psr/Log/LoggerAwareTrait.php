<?php

namespace _PhpScoper80dbed43490f\Psr\Log;

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
    public function setLogger(\_PhpScoper80dbed43490f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
