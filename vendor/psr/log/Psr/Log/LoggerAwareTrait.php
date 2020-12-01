<?php

namespace _PhpScoperad68e34a80c5\Psr\Log;

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
    public function setLogger(\_PhpScoperad68e34a80c5\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
