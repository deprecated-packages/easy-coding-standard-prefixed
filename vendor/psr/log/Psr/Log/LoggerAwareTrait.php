<?php

namespace _PhpScoper9613f3fac51d\Psr\Log;

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
    public function setLogger(\_PhpScoper9613f3fac51d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
