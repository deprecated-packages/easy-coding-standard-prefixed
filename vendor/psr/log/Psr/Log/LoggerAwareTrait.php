<?php

namespace _PhpScoper06c5fb6c14ed\Psr\Log;

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
    public function setLogger(\_PhpScoper06c5fb6c14ed\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
