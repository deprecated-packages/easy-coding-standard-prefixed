<?php

namespace _PhpScopercda2b863d098\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /** @var LoggerInterface */
    protected $logger;
    /**
     * Sets a logger.
     * 
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScopercda2b863d098\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
