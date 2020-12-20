<?php

namespace _PhpScoperba24099fc6fd\Psr\Log;

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
    public function setLogger(\_PhpScoperba24099fc6fd\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
