<?php

namespace _PhpScoper839420027581\Psr\Log;

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
    public function setLogger(\_PhpScoper839420027581\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
