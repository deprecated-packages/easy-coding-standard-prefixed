<?php

namespace _PhpScoper32136251d417\Psr\Log;

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
    public function setLogger(\_PhpScoper32136251d417\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
