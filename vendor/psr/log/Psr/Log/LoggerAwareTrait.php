<?php

namespace _PhpScoperad4605bb9267\Psr\Log;

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
    public function setLogger(\_PhpScoperad4605bb9267\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
