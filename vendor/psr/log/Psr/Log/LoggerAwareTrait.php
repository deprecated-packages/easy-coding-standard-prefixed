<?php

namespace _PhpScoper807f8e74693b\Psr\Log;

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
    public function setLogger(\_PhpScoper807f8e74693b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
