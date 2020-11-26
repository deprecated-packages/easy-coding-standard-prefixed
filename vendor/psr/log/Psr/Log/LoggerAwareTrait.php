<?php

namespace _PhpScoper167729fa1dde\Psr\Log;

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
    public function setLogger(\_PhpScoper167729fa1dde\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
