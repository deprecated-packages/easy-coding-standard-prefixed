<?php

namespace _PhpScoper82aa0193482e\Psr\Log;

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
    public function setLogger(\_PhpScoper82aa0193482e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
