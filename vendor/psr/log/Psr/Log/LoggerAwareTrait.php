<?php

namespace _PhpScoperd2a667bd5a98\Psr\Log;

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
    public function setLogger(\_PhpScoperd2a667bd5a98\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
