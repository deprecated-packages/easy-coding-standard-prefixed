<?php

namespace _PhpScoperfcce67077a55\Psr\Log;

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
    public function setLogger(\_PhpScoperfcce67077a55\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
