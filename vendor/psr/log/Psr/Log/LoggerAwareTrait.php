<?php

namespace _PhpScoper7f41430b5328\Psr\Log;

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
    public function setLogger(\_PhpScoper7f41430b5328\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
