<?php

namespace _PhpScoper8751341571b5\Psr\Log;

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
    public function setLogger(\_PhpScoper8751341571b5\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
