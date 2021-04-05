<?php

namespace _PhpScoper7d3888cf4297\Psr\Log;

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
    public function setLogger(\_PhpScoper7d3888cf4297\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
