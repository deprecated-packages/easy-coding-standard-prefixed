<?php

namespace _PhpScoper967d20dce97a\Psr\Log;

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
    public function setLogger(\_PhpScoper967d20dce97a\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
