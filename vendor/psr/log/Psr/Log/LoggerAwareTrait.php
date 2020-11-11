<?php

namespace _PhpScoper4f985154d5a0\Psr\Log;

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
    public function setLogger(\_PhpScoper4f985154d5a0\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
