<?php

namespace _PhpScoper797695bcfb1f\Psr\Log;

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
    public function setLogger(\_PhpScoper797695bcfb1f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
