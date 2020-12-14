<?php

namespace _PhpScoper4e47e3b12394\Psr\Log;

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
    public function setLogger(\_PhpScoper4e47e3b12394\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
