<?php

namespace _PhpScoper8a1ea80774eb\Psr\Log;

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
    public function setLogger(\_PhpScoper8a1ea80774eb\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
