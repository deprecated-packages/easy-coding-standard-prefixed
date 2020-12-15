<?php

namespace _PhpScoper47644ab3aa9a\Psr\Log;

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
    public function setLogger(\_PhpScoper47644ab3aa9a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
