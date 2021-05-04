<?php

namespace _PhpScoperc2b2a9bb0e13\Psr\Log;

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
    public function setLogger(\_PhpScoperc2b2a9bb0e13\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
