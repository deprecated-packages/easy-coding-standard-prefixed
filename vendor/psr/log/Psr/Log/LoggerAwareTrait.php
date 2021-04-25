<?php

namespace _PhpScoper32abeec2fe5a\Psr\Log;

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
    public function setLogger(\_PhpScoper32abeec2fe5a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
