<?php

namespace _PhpScoperd8b12759ee0d\Psr\Log;

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
    public function setLogger(\_PhpScoperd8b12759ee0d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
