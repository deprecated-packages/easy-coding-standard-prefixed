<?php

namespace _PhpScoperfb2c402b972b\Psr\Log;

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
    public function setLogger(\_PhpScoperfb2c402b972b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
