<?php

namespace _PhpScoper757c066053f8\Psr\Log;

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
    public function setLogger(\_PhpScoper757c066053f8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
