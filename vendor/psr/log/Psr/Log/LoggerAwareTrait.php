<?php

namespace _PhpScoper7239e3eaf11a\Psr\Log;

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
    public function setLogger(\_PhpScoper7239e3eaf11a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
