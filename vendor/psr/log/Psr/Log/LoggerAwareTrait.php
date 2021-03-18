<?php

namespace _PhpScoper0ba97041430d\Psr\Log;

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
    public function setLogger(\_PhpScoper0ba97041430d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
