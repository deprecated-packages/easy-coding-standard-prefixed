<?php

namespace _PhpScopera609aff833be\Psr\Log;

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
    public function setLogger(\_PhpScopera609aff833be\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
