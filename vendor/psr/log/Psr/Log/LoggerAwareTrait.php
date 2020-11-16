<?php

namespace _PhpScoper3e1e0e5bb8ef\Psr\Log;

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
    public function setLogger(\_PhpScoper3e1e0e5bb8ef\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
