<?php

namespace _PhpScopere7e518ee6a5b\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface|null
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScopere7e518ee6a5b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
