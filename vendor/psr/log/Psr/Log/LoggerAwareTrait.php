<?php

namespace _PhpScoperb83706991c7f\Psr\Log;

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
    public function setLogger(\_PhpScoperb83706991c7f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
