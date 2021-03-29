<?php

namespace _PhpScoper5e5c2222758f\Psr\Log;

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
    public function setLogger(\_PhpScoper5e5c2222758f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
