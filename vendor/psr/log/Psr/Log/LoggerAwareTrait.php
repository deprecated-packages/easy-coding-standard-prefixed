<?php

namespace _PhpScopera1f11cc38772\Psr\Log;

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
    public function setLogger(\_PhpScopera1f11cc38772\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
