<?php

namespace _PhpScoper3d6b50c3ca2f\Psr\Log;

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
    public function setLogger(\_PhpScoper3d6b50c3ca2f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
