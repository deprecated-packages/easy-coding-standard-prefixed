<?php

namespace _PhpScoper87c77ad5700d\Psr\Log;

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
    public function setLogger(\_PhpScoper87c77ad5700d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
