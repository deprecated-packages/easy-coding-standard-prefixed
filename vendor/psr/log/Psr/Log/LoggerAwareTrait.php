<?php

namespace _PhpScoperbaf90856897c\Psr\Log;

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
    public function setLogger(\_PhpScoperbaf90856897c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
