<?php

namespace _PhpScoper842c7347e6be\Psr\Log;

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
    public function setLogger(\_PhpScoper842c7347e6be\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
