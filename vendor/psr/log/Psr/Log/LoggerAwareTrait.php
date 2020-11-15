<?php

namespace _PhpScoper49c742f5a4ee\Psr\Log;

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
    public function setLogger(\_PhpScoper49c742f5a4ee\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
