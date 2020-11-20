<?php

namespace _PhpScoperc753ccca5a0c\Psr\Log;

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
    public function setLogger(\_PhpScoperc753ccca5a0c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
