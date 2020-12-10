<?php

namespace _PhpScoper9ef667a5e42c\Psr\Log;

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
    public function setLogger(\_PhpScoper9ef667a5e42c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
