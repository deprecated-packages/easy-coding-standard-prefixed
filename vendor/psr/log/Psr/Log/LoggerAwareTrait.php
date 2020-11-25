<?php

namespace _PhpScoper2f75f00bf6fa\Psr\Log;

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
    public function setLogger(\_PhpScoper2f75f00bf6fa\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
