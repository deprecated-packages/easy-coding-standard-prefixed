<?php

namespace _PhpScoper666af036e800\Psr\Log;

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
    public function setLogger(\_PhpScoper666af036e800\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
