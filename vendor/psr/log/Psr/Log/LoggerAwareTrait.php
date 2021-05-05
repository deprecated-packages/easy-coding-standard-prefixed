<?php

namespace _PhpScoper7e6a1331d94a\Psr\Log;

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
    public function setLogger(\_PhpScoper7e6a1331d94a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
