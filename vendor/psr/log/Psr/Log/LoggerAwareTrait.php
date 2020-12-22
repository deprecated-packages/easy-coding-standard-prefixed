<?php

namespace _PhpScoper68a3a2539032\Psr\Log;

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
    public function setLogger(\_PhpScoper68a3a2539032\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
