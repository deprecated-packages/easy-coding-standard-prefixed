<?php

namespace _PhpScoper5ade29b97028\Psr\Log;

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
    public function setLogger(\_PhpScoper5ade29b97028\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
