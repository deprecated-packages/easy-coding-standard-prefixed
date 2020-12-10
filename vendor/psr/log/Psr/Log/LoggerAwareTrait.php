<?php

namespace _PhpScoperb458b528613f\Psr\Log;

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
    public function setLogger(\_PhpScoperb458b528613f\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
