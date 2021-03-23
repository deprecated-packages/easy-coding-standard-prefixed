<?php

namespace _PhpScoper4aefa5ecccc4\Psr\Log;

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
    public function setLogger(\_PhpScoper4aefa5ecccc4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
