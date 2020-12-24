<?php

namespace _PhpScopera37d6fb0b1ab\Psr\Log;

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
    public function setLogger(\_PhpScopera37d6fb0b1ab\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
