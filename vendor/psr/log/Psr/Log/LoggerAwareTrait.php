<?php

namespace _PhpScoper78e1a27e740b\Psr\Log;

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
    public function setLogger(\_PhpScoper78e1a27e740b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
