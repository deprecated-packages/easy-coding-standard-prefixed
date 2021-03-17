<?php

namespace _PhpScoper246d3630afdd\Psr\Log;

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
    public function setLogger(\_PhpScoper246d3630afdd\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
