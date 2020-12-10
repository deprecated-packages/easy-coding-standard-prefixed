<?php

namespace _PhpScoper21c6ce8bfe5d\Psr\Log;

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
    public function setLogger(\_PhpScoper21c6ce8bfe5d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
