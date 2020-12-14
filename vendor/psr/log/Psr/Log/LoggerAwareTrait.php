<?php

namespace _PhpScoper6224e3b16fcc\Psr\Log;

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
    public function setLogger(\_PhpScoper6224e3b16fcc\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
