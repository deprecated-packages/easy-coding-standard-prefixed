<?php

namespace _PhpScoper3a0e32c9d767\Psr\Log;

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
    public function setLogger(\_PhpScoper3a0e32c9d767\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
