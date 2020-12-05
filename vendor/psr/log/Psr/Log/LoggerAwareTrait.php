<?php

namespace _PhpScoper56c9df53a081\Psr\Log;

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
    public function setLogger(\_PhpScoper56c9df53a081\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
