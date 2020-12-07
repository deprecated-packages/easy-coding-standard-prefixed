<?php

namespace _PhpScoperb73f9e44f4eb\Psr\Log;

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
    public function setLogger(\_PhpScoperb73f9e44f4eb\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
