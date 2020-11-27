<?php

namespace _PhpScoper776637f3d3c3\Psr\Log;

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
    public function setLogger(\_PhpScoper776637f3d3c3\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
