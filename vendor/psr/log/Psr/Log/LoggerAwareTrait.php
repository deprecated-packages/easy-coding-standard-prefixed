<?php

namespace _PhpScoperef5048aa2573\Psr\Log;

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
    public function setLogger(\_PhpScoperef5048aa2573\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
