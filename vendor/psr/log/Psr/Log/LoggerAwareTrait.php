<?php

namespace _PhpScoperfab1bfb7ec99\Psr\Log;

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
    public function setLogger(\_PhpScoperfab1bfb7ec99\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
