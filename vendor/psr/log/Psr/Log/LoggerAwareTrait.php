<?php

namespace _PhpScoper8db4616aa69d\Psr\Log;

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
    public function setLogger(\_PhpScoper8db4616aa69d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
