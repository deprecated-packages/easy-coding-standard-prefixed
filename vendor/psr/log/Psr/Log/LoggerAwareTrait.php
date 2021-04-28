<?php

namespace _PhpScoperdb89411b20b4\Psr\Log;

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
    public function setLogger(\_PhpScoperdb89411b20b4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
