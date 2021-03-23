<?php

namespace _PhpScoper35ec99c463ee\Psr\Log;

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
    public function setLogger(\_PhpScoper35ec99c463ee\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
