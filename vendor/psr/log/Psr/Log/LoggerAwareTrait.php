<?php

namespace _PhpScoper57210e33e43a\Psr\Log;

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
    public function setLogger(\_PhpScoper57210e33e43a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
