<?php

namespace _PhpScoper8de082cbb8c7\Psr\Log;

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
    public function setLogger(\_PhpScoper8de082cbb8c7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
