<?php

namespace _PhpScoper70d1796231ae\Psr\Log;

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
    public function setLogger(\_PhpScoper70d1796231ae\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
