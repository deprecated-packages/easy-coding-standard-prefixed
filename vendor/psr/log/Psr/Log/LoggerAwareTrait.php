<?php

namespace _PhpScoper8a7636b3fdaf\Psr\Log;

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
    public function setLogger(\_PhpScoper8a7636b3fdaf\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
