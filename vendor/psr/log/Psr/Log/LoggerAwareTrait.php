<?php

namespace _PhpScoper229e8121cf9f\Psr\Log;

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
    public function setLogger(\_PhpScoper229e8121cf9f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
