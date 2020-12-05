<?php

namespace _PhpScoperc83f84c90b60\Psr\Log;

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
    public function setLogger(\_PhpScoperc83f84c90b60\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
