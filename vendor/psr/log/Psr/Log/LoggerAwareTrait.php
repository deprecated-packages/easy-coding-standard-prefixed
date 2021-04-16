<?php

namespace _PhpScoper1ddca3f92d7d\Psr\Log;

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
    public function setLogger(\_PhpScoper1ddca3f92d7d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
