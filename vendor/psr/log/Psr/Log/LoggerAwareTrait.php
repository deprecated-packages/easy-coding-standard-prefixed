<?php

namespace _PhpScopereb8678af2407\Psr\Log;

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
    public function setLogger(\_PhpScopereb8678af2407\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
