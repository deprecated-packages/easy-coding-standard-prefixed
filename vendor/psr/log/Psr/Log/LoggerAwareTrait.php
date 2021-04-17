<?php

namespace _PhpScoper82a1412fb847\Psr\Log;

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
    public function setLogger(\_PhpScoper82a1412fb847\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
