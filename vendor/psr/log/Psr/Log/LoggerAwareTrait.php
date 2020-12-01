<?php

namespace _PhpScoperb36402634947\Psr\Log;

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
    public function setLogger(\_PhpScoperb36402634947\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
