<?php

namespace _PhpScoper6ffa0951a2e9\Psr\Log;

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
    public function setLogger(\_PhpScoper6ffa0951a2e9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
