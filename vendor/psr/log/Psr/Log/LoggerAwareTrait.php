<?php

namespace _PhpScoper239b374a39c8\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /** @var LoggerInterface */
    protected $logger;
    /**
     * Sets a logger.
     * 
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoper239b374a39c8\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
