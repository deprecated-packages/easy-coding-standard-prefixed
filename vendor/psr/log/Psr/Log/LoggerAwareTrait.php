<?php

namespace _PhpScoper4fedb9aa1e5f\Psr\Log;

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
    public function setLogger(\_PhpScoper4fedb9aa1e5f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
