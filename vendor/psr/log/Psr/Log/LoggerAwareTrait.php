<?php

namespace _PhpScoperdaf95aff095b\Psr\Log;

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
    public function setLogger(\_PhpScoperdaf95aff095b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
