<?php

namespace _PhpScoper653866602a9e\Psr\Log;

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
    public function setLogger(\_PhpScoper653866602a9e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
