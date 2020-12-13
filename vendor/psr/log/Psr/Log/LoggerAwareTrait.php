<?php

namespace _PhpScoper78af57a363a0\Psr\Log;

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
    public function setLogger(\_PhpScoper78af57a363a0\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
