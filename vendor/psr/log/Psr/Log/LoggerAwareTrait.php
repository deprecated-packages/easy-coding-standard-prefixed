<?php

namespace _PhpScoper10b1b2c5ca55\Psr\Log;

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
    public function setLogger(\_PhpScoper10b1b2c5ca55\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
