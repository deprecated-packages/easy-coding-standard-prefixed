<?php

namespace _PhpScoper589e8c04a9ef\Psr\Log;

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
    public function setLogger(\_PhpScoper589e8c04a9ef\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
