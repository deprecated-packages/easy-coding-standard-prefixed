<?php

namespace _PhpScopera8f555a7493c\Psr\Log;

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
    public function setLogger(\_PhpScopera8f555a7493c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
