<?php

namespace _PhpScoper27cac5a8b4ab\Psr\Log;

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
    public function setLogger(\_PhpScoper27cac5a8b4ab\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
