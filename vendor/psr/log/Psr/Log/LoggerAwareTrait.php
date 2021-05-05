<?php

namespace _PhpScoper53db80252f28\Psr\Log;

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
    public function setLogger(\_PhpScoper53db80252f28\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
