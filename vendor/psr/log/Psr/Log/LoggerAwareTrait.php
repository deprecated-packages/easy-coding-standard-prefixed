<?php

namespace _PhpScoperc95ae4bf942a\Psr\Log;

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
    public function setLogger(\_PhpScoperc95ae4bf942a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
