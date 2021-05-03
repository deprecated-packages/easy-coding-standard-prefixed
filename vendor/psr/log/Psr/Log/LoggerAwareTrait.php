<?php

namespace _PhpScoper91c59a2f52e1\Psr\Log;

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
    public function setLogger(\_PhpScoper91c59a2f52e1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
