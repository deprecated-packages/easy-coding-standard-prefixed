<?php

namespace _PhpScoperdeea1786e972\Psr\Log;

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
    public function setLogger(\_PhpScoperdeea1786e972\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
