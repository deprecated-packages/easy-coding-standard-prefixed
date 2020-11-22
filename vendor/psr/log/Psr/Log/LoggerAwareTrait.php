<?php

namespace _PhpScoperc5bee3a837bb\Psr\Log;

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
    public function setLogger(\_PhpScoperc5bee3a837bb\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
