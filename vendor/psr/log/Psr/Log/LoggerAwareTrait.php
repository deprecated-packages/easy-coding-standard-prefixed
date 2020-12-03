<?php

namespace _PhpScoperba5852cc6147\Psr\Log;

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
    public function setLogger(\_PhpScoperba5852cc6147\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
