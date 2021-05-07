<?php

namespace _PhpScoper91fe47cd7f25\Psr\Log;

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
    public function setLogger(\_PhpScoper91fe47cd7f25\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
