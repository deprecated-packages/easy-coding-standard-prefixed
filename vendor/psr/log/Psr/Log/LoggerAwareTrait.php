<?php

namespace _PhpScoper279cf54b77ad\Psr\Log;

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
    public function setLogger(\_PhpScoper279cf54b77ad\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
