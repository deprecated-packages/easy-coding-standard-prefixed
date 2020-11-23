<?php

namespace _PhpScoperd4c5032f0671\Psr\Log;

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
    public function setLogger(\_PhpScoperd4c5032f0671\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
