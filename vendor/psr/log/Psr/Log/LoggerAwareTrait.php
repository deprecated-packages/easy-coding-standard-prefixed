<?php

namespace _PhpScoper3c4e863e8a34\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface|null
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoper3c4e863e8a34\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
