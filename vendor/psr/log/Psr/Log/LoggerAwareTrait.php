<?php

namespace _PhpScoper8b3c9ad56565\Psr\Log;

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
    public function setLogger(\_PhpScoper8b3c9ad56565\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
