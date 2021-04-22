<?php

namespace _PhpScoper9907e2e69ce3\Psr\Log;

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
    public function setLogger(\_PhpScoper9907e2e69ce3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
