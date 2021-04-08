<?php

namespace _PhpScoper2f04ef4e8878\Psr\Log;

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
    public function setLogger(\_PhpScoper2f04ef4e8878\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
