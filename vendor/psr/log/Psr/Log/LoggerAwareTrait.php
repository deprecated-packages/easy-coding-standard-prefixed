<?php

namespace _PhpScoperff1e514762b4\Psr\Log;

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
    public function setLogger(\_PhpScoperff1e514762b4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
