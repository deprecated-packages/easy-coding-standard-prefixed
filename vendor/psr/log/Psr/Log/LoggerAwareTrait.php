<?php

namespace _PhpScoperfaaf57618f34\Psr\Log;

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
    public function setLogger(\_PhpScoperfaaf57618f34\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
