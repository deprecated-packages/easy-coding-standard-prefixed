<?php

namespace _PhpScoperad4b7e2c09d8\Psr\Log;

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
    public function setLogger(\_PhpScoperad4b7e2c09d8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
