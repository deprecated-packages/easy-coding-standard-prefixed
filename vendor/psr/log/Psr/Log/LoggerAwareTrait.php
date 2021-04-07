<?php

namespace _PhpScoper6a8174766bf7\Psr\Log;

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
    public function setLogger(\_PhpScoper6a8174766bf7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
