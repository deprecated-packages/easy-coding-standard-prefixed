<?php

namespace _PhpScoper2737ffe13a7b\Psr\Log;

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
    public function setLogger(\_PhpScoper2737ffe13a7b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
