<?php

namespace _PhpScoper255a4eaff575\Psr\Log;

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
    public function setLogger(\_PhpScoper255a4eaff575\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
