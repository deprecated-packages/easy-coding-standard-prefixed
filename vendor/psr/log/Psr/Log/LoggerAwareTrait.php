<?php

namespace _PhpScoper2dc059b3a969\Psr\Log;

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
    public function setLogger(\_PhpScoper2dc059b3a969\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
