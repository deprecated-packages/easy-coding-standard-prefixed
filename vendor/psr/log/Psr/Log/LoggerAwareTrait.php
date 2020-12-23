<?php

namespace _PhpScoper14cb6de5473d\Psr\Log;

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
    public function setLogger(\_PhpScoper14cb6de5473d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
