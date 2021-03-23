<?php

namespace _PhpScoper5e93f39f19fe\Psr\Log;

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
    public function setLogger(\_PhpScoper5e93f39f19fe\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
