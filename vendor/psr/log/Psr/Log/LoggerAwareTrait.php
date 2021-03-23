<?php

namespace _PhpScoper8ca6426d4e0c\Psr\Log;

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
    public function setLogger(\_PhpScoper8ca6426d4e0c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
