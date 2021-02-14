<?php

namespace _PhpScoperf361a7d70552\Psr\Log;

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
    public function setLogger(\_PhpScoperf361a7d70552\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
