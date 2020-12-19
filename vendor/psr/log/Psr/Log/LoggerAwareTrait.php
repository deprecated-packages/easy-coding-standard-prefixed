<?php

namespace _PhpScoper8b97b0dd6f5b\Psr\Log;

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
    public function setLogger(\_PhpScoper8b97b0dd6f5b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
