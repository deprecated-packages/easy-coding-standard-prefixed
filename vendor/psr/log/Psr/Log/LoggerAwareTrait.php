<?php

namespace _PhpScoper917c99b6aa4c\Psr\Log;

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
    public function setLogger(\_PhpScoper917c99b6aa4c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
