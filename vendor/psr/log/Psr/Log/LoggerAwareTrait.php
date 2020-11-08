<?php

namespace _PhpScoperd79d87c3336e\Psr\Log;

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
    public function setLogger(\_PhpScoperd79d87c3336e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
