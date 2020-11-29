<?php

namespace _PhpScopercae980ebf12d\Psr\Log;

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
    public function setLogger(\_PhpScopercae980ebf12d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
