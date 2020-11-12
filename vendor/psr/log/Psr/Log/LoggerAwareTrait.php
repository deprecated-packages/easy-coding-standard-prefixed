<?php

namespace _PhpScoper7cef7256eba6\Psr\Log;

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
    public function setLogger(\_PhpScoper7cef7256eba6\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
