<?php

namespace _PhpScoper66292c14b658\Psr\Log;

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
    public function setLogger(\_PhpScoper66292c14b658\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
