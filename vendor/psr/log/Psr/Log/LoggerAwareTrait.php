<?php

namespace _PhpScoperd301db66c80c\Psr\Log;

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
    public function setLogger(\_PhpScoperd301db66c80c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
