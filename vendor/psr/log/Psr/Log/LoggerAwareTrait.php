<?php

namespace _PhpScoper629192f0909b\Psr\Log;

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
    public function setLogger(\_PhpScoper629192f0909b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
