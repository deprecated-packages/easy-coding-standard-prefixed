<?php

namespace _PhpScoper2637e9a72c68\Psr\Log;

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
    public function setLogger(\_PhpScoper2637e9a72c68\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
