<?php

namespace _PhpScoper3fa05b4669af\Psr\Log;

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
    public function setLogger(\_PhpScoper3fa05b4669af\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
