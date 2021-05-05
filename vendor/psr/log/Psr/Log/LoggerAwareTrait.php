<?php

namespace _PhpScoperef2f7aa3581e\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface|null
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoperef2f7aa3581e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
