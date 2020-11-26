<?php

namespace _PhpScoper8acb416c2f5a\Psr\Log;

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
    public function setLogger(\_PhpScoper8acb416c2f5a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
