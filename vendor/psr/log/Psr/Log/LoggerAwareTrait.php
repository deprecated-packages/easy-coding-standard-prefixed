<?php

namespace _PhpScoper81b3ff5ab9fe\Psr\Log;

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
    public function setLogger(\_PhpScoper81b3ff5ab9fe\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
