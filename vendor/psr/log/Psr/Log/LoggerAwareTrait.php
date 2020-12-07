<?php

namespace _PhpScoperda2604e33acb\Psr\Log;

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
    public function setLogger(\_PhpScoperda2604e33acb\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
