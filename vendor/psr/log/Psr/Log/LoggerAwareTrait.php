<?php

namespace _PhpScoperfa521053d812\Psr\Log;

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
    public function setLogger(\_PhpScoperfa521053d812\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
