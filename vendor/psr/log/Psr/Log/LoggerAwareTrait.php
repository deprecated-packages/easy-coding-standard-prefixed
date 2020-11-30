<?php

namespace _PhpScopera09818bc50da\Psr\Log;

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
    public function setLogger(\_PhpScopera09818bc50da\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
