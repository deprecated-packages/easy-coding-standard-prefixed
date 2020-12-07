<?php

namespace _PhpScoper18bd934c069f\Psr\Log;

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
    public function setLogger(\_PhpScoper18bd934c069f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
