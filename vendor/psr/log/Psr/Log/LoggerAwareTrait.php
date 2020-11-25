<?php

namespace _PhpScoper7312d63d356f\Psr\Log;

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
    public function setLogger(\_PhpScoper7312d63d356f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
