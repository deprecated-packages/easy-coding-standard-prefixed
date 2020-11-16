<?php

namespace _PhpScopera9d6b451df71\Psr\Log;

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
    public function setLogger(\_PhpScopera9d6b451df71\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
