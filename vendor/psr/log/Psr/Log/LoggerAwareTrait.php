<?php

namespace _PhpScoper0261263ca84f\Psr\Log;

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
    public function setLogger(\_PhpScoper0261263ca84f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
