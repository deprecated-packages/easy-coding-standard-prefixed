<?php

namespace _PhpScoperc7a2896cc805\Psr\Log;

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
    public function setLogger(\_PhpScoperc7a2896cc805\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
