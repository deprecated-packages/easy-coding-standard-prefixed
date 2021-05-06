<?php

namespace _PhpScoper890197fe38f7\Psr\Log;

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
    public function setLogger(\_PhpScoper890197fe38f7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
