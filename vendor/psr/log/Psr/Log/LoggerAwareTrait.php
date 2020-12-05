<?php

namespace _PhpScoper59ccd3f8e121\Psr\Log;

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
    public function setLogger(\_PhpScoper59ccd3f8e121\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
