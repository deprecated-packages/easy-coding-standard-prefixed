<?php

namespace _PhpScoper2dcc760f8ff8\Psr\Log;

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
    public function setLogger(\_PhpScoper2dcc760f8ff8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
