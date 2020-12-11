<?php

namespace _PhpScoperea337ed74749\Psr\Log;

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
    public function setLogger(\_PhpScoperea337ed74749\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
