<?php

namespace _PhpScoper4972b76c81a2\Psr\Log;

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
    public function setLogger(\_PhpScoper4972b76c81a2\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
