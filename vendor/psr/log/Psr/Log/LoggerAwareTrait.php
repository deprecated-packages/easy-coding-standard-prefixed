<?php

namespace _PhpScoper28625551a513\Psr\Log;

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
    public function setLogger(\_PhpScoper28625551a513\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
