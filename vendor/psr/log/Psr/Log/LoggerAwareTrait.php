<?php

namespace _PhpScoper8cb97064581a\Psr\Log;

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
    public function setLogger(\_PhpScoper8cb97064581a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
