<?php

namespace _PhpScoper59558822d8c7\Psr\Log;

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
    public function setLogger(\_PhpScoper59558822d8c7\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
