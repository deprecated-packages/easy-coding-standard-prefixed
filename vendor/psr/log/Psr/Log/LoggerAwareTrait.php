<?php

namespace _PhpScoper7c1f54fd2f3a\Psr\Log;

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
    public function setLogger(\_PhpScoper7c1f54fd2f3a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
