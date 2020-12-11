<?php

namespace _PhpScoper1e80a2e03314\Psr\Log;

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
    public function setLogger(\_PhpScoper1e80a2e03314\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
