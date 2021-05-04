<?php

namespace _PhpScoper08fb1f8a2f44\Psr\Log;

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
    public function setLogger(\_PhpScoper08fb1f8a2f44\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
