<?php

namespace _PhpScoper967c4b7e296e\Psr\Log;

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
    public function setLogger(\_PhpScoper967c4b7e296e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
