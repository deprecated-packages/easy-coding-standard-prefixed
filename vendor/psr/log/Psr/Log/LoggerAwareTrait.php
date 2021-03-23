<?php

namespace _PhpScoperf523baae4f87\Psr\Log;

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
    public function setLogger(\_PhpScoperf523baae4f87\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
