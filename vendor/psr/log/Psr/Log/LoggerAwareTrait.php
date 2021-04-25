<?php

namespace _PhpScoper96c81c3c1716\Psr\Log;

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
    public function setLogger(\_PhpScoper96c81c3c1716\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
