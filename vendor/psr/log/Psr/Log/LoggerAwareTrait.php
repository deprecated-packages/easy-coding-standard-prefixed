<?php

namespace _PhpScoper21763e6c7ac4\Psr\Log;

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
    public function setLogger(\_PhpScoper21763e6c7ac4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
