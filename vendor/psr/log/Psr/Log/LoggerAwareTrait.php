<?php

namespace _PhpScoper908feaf49cd8\Psr\Log;

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
    public function setLogger(\_PhpScoper908feaf49cd8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
