<?php

namespace _PhpScoper269dc521b0fa\Psr\Log;

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
    public function setLogger(\_PhpScoper269dc521b0fa\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
