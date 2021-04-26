<?php

namespace _PhpScoperd51690aa3091\Psr\Log;

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
    public function setLogger(\_PhpScoperd51690aa3091\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
