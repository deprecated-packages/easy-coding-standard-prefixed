<?php

namespace _PhpScopere015d8a3273c\Psr\Log;

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
    public function setLogger(\_PhpScopere015d8a3273c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
