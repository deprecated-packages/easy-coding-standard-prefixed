<?php

namespace _PhpScoper2d11f18408ea\Psr\Log;

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
    public function setLogger(\_PhpScoper2d11f18408ea\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
