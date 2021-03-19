<?php

namespace _PhpScoperd47a2fa2a77e\Psr\Log;

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
    public function setLogger(\_PhpScoperd47a2fa2a77e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
