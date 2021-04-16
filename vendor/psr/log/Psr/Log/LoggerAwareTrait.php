<?php

namespace _PhpScopera22bb3f4d7b7\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScopera22bb3f4d7b7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
