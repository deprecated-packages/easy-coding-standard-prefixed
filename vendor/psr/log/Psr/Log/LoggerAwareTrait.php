<?php

namespace _PhpScoper79449c4e744b\Psr\Log;

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
    public function setLogger(\_PhpScoper79449c4e744b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
