<?php

namespace _PhpScoper37a255897161\Psr\Log;

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
    public function setLogger(\_PhpScoper37a255897161\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
