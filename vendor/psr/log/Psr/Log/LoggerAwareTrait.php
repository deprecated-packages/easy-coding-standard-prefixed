<?php

namespace _PhpScopera4fc793dae73\Psr\Log;

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
    public function setLogger(\_PhpScopera4fc793dae73\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
