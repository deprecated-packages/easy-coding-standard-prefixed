<?php

namespace _PhpScoper3c44535fe75f\Psr\Log;

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
    public function setLogger(\_PhpScoper3c44535fe75f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
