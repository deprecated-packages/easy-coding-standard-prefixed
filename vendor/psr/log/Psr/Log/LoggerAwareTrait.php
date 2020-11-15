<?php

namespace _PhpScoper70072c07b02b\Psr\Log;

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
    public function setLogger(\_PhpScoper70072c07b02b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
