<?php

namespace _PhpScoperb6a8e65b492c\Psr\Log;

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
    public function setLogger(\_PhpScoperb6a8e65b492c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
