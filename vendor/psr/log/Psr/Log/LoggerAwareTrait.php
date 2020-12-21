<?php

namespace _PhpScoperfcf15c26e033\Psr\Log;

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
    public function setLogger(\_PhpScoperfcf15c26e033\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
