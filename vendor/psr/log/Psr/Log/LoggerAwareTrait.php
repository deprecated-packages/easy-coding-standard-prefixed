<?php

namespace _PhpScoper069ebd53a518\Psr\Log;

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
    public function setLogger(\_PhpScoper069ebd53a518\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
