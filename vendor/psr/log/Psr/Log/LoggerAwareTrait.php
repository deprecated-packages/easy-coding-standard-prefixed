<?php

namespace _PhpScopere341acab57d4\Psr\Log;

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
    public function setLogger(\_PhpScopere341acab57d4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
