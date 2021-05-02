<?php

namespace _PhpScoperb5b1090524db\Psr\Log;

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
    public function setLogger(\_PhpScoperb5b1090524db\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
