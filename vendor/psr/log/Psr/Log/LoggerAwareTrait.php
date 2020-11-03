<?php

namespace _PhpScoper2b44cb0c30af\Psr\Log;

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
    public function setLogger(\_PhpScoper2b44cb0c30af\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
