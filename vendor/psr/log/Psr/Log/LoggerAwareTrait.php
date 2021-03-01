<?php

namespace _PhpScoperf3dc21757def\Psr\Log;

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
    public function setLogger(\_PhpScoperf3dc21757def\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
