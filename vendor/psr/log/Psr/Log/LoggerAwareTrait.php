<?php

namespace _PhpScoper9d73a84b09ad\Psr\Log;

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
    public function setLogger(\_PhpScoper9d73a84b09ad\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
