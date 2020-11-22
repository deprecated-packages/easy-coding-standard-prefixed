<?php

namespace _PhpScoper21fff473f90a\Psr\Log;

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
    public function setLogger(\_PhpScoper21fff473f90a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
