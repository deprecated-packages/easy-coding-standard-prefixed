<?php

namespace _PhpScoperd9fcac9e904f\Psr\Log;

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
    public function setLogger(\_PhpScoperd9fcac9e904f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
