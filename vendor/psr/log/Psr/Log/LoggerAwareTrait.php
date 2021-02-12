<?php

namespace _PhpScoper4fc0030e9d22\Psr\Log;

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
    public function setLogger(\_PhpScoper4fc0030e9d22\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
