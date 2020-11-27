<?php

namespace _PhpScoper578a67c80b2b\Psr\Log;

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
    public function setLogger(\_PhpScoper578a67c80b2b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
