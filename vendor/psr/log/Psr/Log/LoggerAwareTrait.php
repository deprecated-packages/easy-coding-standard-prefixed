<?php

namespace _PhpScoperc7096eb2567d\Psr\Log;

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
    public function setLogger(\_PhpScoperc7096eb2567d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
