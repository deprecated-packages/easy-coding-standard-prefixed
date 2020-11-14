<?php

namespace _PhpScoperddde3ba4aebc\Psr\Log;

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
    public function setLogger(\_PhpScoperddde3ba4aebc\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
