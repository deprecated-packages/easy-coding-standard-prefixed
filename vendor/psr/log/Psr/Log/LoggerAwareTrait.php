<?php

namespace _PhpScoperac4e86be08e5\Psr\Log;

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
    public function setLogger(\_PhpScoperac4e86be08e5\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
