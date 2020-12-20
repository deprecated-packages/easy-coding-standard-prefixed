<?php

namespace _PhpScoperab9510cd5d97\Psr\Log;

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
    public function setLogger(\_PhpScoperab9510cd5d97\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
