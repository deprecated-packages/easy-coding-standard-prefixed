<?php

namespace _PhpScoperb26833cc184d\Psr\Log;

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
    public function setLogger(\_PhpScoperb26833cc184d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
