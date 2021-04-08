<?php

namespace _PhpScopera909b9d9be2e\Psr\Log;

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
    public function setLogger(\_PhpScopera909b9d9be2e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
