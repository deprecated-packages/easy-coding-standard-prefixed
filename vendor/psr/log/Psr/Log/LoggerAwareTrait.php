<?php

namespace _PhpScopera40fc53e636b\Psr\Log;

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
    public function setLogger(\_PhpScopera40fc53e636b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
