<?php

namespace _PhpScoper6d453419d16a\Psr\Log;

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
    public function setLogger(\_PhpScoper6d453419d16a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
