<?php

namespace _PhpScoperc7c7dddc9238\Psr\Log;

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
    public function setLogger(\_PhpScoperc7c7dddc9238\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
