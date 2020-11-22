<?php

namespace _PhpScoperf3db63c305b2\Psr\Log;

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
    public function setLogger(\_PhpScoperf3db63c305b2\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
