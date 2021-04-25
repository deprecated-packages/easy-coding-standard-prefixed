<?php

namespace _PhpScoper5f836821822a\Psr\Log;

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
    public function setLogger(\_PhpScoper5f836821822a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
