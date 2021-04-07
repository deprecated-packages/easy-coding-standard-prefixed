<?php

namespace _PhpScoper14718bfcc75e\Psr\Log;

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
    public function setLogger(\_PhpScoper14718bfcc75e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
