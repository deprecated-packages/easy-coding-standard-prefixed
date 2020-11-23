<?php

namespace _PhpScoperc4b135661b3a\Psr\Log;

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
    public function setLogger(\_PhpScoperc4b135661b3a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
