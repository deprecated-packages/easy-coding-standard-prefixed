<?php

namespace _PhpScoper614deab2c612\Psr\Log;

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
    public function setLogger(\_PhpScoper614deab2c612\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
