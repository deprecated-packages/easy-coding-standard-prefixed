<?php

namespace _PhpScoper6c2f17c43d2d\Psr\Log;

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
    public function setLogger(\_PhpScoper6c2f17c43d2d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
