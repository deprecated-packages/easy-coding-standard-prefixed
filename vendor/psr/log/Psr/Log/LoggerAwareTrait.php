<?php

namespace _PhpScopera4be459e5e3d\Psr\Log;

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
    public function setLogger(\_PhpScopera4be459e5e3d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
