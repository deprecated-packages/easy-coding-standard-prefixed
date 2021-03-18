<?php

namespace _PhpScoper0b185984cfb7\Psr\Log;

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
    public function setLogger(\_PhpScoper0b185984cfb7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
