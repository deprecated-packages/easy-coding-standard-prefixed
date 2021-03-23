<?php

namespace _PhpScoper08686b2277af\Psr\Log;

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
    public function setLogger(\_PhpScoper08686b2277af\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
