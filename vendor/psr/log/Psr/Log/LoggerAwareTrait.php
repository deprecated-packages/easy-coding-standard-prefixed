<?php

namespace _PhpScoper356bfb655d08\Psr\Log;

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
    public function setLogger(\_PhpScoper356bfb655d08\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
