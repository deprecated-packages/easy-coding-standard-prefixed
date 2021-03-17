<?php

namespace _PhpScopera3425146d487\Psr\Log;

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
    public function setLogger(\_PhpScopera3425146d487\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
