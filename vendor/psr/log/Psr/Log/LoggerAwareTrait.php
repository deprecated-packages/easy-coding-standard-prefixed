<?php

namespace _PhpScoperbc5235eb86f3\Psr\Log;

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
    public function setLogger(\_PhpScoperbc5235eb86f3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
