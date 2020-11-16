<?php

namespace _PhpScoperedc2e0c967db\Psr\Log;

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
    public function setLogger(\_PhpScoperedc2e0c967db\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
