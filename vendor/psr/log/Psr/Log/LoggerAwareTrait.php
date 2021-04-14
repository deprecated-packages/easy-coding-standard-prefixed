<?php

namespace _PhpScoper7b319b4d8e1c\Psr\Log;

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
    public function setLogger(\_PhpScoper7b319b4d8e1c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
