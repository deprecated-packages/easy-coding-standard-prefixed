<?php

namespace _PhpScopera189153e1f79\Psr\Log;

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
    public function setLogger(\_PhpScopera189153e1f79\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
