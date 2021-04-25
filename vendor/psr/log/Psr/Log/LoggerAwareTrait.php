<?php

namespace _PhpScoper6b1da46bea54\Psr\Log;

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
    public function setLogger(\_PhpScoper6b1da46bea54\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
