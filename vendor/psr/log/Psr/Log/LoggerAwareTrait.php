<?php

namespace _PhpScoper1ed8518cf1bf\Psr\Log;

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
    public function setLogger(\_PhpScoper1ed8518cf1bf\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
