<?php

namespace _PhpScoperb09c3ec8e01a\Psr\Log;

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
    public function setLogger(\_PhpScoperb09c3ec8e01a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
