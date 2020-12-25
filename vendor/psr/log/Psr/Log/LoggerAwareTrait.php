<?php

namespace _PhpScoper92597f5b42a7\Psr\Log;

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
    public function setLogger(\_PhpScoper92597f5b42a7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
