<?php

namespace _PhpScoper611f49771945\Psr\Log;

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
    public function setLogger(\_PhpScoper611f49771945\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
