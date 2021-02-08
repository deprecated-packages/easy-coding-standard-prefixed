<?php

namespace _PhpScoper7faa8deb0d3c\Psr\Log;

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
    public function setLogger(\_PhpScoper7faa8deb0d3c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
