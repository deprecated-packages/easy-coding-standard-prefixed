<?php

namespace _PhpScoperf053e888b664\Psr\Log;

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
    public function setLogger(\_PhpScoperf053e888b664\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
