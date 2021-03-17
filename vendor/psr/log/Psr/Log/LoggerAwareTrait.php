<?php

namespace _PhpScoper4e2df00556a9\Psr\Log;

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
    public function setLogger(\_PhpScoper4e2df00556a9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
