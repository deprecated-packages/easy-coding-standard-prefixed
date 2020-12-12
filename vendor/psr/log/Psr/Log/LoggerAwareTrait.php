<?php

namespace _PhpScoper11a6395266c4\Psr\Log;

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
    public function setLogger(\_PhpScoper11a6395266c4\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
