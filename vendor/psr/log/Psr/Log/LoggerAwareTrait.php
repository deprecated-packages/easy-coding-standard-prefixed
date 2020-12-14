<?php

namespace _PhpScoperc64a4ac1af35\Psr\Log;

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
    public function setLogger(\_PhpScoperc64a4ac1af35\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
