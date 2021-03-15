<?php

namespace _PhpScoper971ef29294dd\Psr\Log;

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
    public function setLogger(\_PhpScoper971ef29294dd\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
