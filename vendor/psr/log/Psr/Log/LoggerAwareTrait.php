<?php

namespace _PhpScoperd8b0b9452568\Psr\Log;

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
    public function setLogger(\_PhpScoperd8b0b9452568\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
