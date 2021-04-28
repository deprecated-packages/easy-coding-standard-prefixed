<?php

namespace _PhpScoper1b2f8b9c0339\Psr\Log;

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
    public function setLogger(\_PhpScoper1b2f8b9c0339\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
