<?php

namespace _PhpScoper15c5423f4731\Psr\Log;

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
    public function setLogger(\_PhpScoper15c5423f4731\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
