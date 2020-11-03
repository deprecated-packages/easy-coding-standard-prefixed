<?php

namespace _PhpScoper83a475a0590e\Psr\Log;

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
    public function setLogger(\_PhpScoper83a475a0590e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
