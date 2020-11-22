<?php

namespace _PhpScoper4cd05b62e9f1\Psr\Log;

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
    public function setLogger(\_PhpScoper4cd05b62e9f1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
