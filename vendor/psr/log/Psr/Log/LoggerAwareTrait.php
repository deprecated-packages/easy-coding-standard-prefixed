<?php

namespace _PhpScoperc8fea59b0cb1\Psr\Log;

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
    public function setLogger(\_PhpScoperc8fea59b0cb1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
