<?php

namespace _PhpScoper130a9a1cd4a2\Psr\Log;

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
    public function setLogger(\_PhpScoper130a9a1cd4a2\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
