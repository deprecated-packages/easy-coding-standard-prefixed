<?php

namespace _PhpScoper855b7fb41c61\Psr\Log;

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
    public function setLogger(\_PhpScoper855b7fb41c61\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
