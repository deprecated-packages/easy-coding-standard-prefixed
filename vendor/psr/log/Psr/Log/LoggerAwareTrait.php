<?php

namespace _PhpScoper0752b31150a1\Psr\Log;

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
    public function setLogger(\_PhpScoper0752b31150a1\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
