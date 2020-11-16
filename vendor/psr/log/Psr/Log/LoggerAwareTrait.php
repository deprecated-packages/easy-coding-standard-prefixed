<?php

namespace _PhpScoper8e2d8a2760d1\Psr\Log;

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
    public function setLogger(\_PhpScoper8e2d8a2760d1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
