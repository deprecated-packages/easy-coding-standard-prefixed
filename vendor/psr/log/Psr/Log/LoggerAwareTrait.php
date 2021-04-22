<?php

namespace _PhpScopera9d6a31d814c\Psr\Log;

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
    public function setLogger(\_PhpScopera9d6a31d814c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
