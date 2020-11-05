<?php

namespace _PhpScoper6ec31b85adcf\Psr\Log;

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
    public function setLogger(\_PhpScoper6ec31b85adcf\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
