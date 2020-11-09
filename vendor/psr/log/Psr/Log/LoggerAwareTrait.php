<?php

namespace _PhpScoper880bfa4d8b51\Psr\Log;

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
    public function setLogger(\_PhpScoper880bfa4d8b51\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
