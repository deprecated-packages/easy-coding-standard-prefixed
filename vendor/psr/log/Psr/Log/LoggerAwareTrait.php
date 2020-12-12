<?php

namespace _PhpScoperbd5c5a045153\Psr\Log;

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
    public function setLogger(\_PhpScoperbd5c5a045153\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
