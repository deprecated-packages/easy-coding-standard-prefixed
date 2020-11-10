<?php

namespace _PhpScoper470d6df94ac0\Psr\Log;

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
    public function setLogger(\_PhpScoper470d6df94ac0\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
