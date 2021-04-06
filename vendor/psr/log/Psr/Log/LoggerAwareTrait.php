<?php

namespace _PhpScoperb6361033cf41\Psr\Log;

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
    public function setLogger(\_PhpScoperb6361033cf41\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
