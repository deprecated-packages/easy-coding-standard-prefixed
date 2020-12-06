<?php

namespace _PhpScoper3e8786a75afe\Psr\Log;

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
    public function setLogger(\_PhpScoper3e8786a75afe\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
