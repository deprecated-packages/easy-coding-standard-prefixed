<?php

namespace _PhpScoper13160cf3462c\Psr\Log;

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
    public function setLogger(\_PhpScoper13160cf3462c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
