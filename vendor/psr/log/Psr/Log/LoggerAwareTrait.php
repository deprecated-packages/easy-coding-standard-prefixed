<?php

namespace _PhpScoper5384d7276e1f\Psr\Log;

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
    public function setLogger(\_PhpScoper5384d7276e1f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
