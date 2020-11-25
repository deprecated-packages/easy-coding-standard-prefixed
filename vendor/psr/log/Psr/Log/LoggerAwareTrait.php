<?php

namespace _PhpScoperaa402dd1b1f1\Psr\Log;

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
    public function setLogger(\_PhpScoperaa402dd1b1f1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
