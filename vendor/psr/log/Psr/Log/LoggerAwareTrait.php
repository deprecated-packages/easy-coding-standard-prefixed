<?php

namespace _PhpScoper48800f361566\Psr\Log;

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
    public function setLogger(\_PhpScoper48800f361566\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
