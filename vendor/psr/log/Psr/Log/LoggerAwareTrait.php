<?php

namespace _PhpScoperc8b83ee8976a\Psr\Log;

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
    public function setLogger(\_PhpScoperc8b83ee8976a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
