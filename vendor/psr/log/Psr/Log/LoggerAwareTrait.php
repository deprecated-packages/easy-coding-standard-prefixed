<?php

namespace _PhpScoper64a921a5401b\Psr\Log;

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
    public function setLogger(\_PhpScoper64a921a5401b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
