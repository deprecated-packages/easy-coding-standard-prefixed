<?php

namespace _PhpScoperd74b3ed28382\Psr\Log;

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
    public function setLogger(\_PhpScoperd74b3ed28382\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
