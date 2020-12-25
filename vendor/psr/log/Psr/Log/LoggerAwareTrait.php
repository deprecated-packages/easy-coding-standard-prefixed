<?php

namespace _PhpScoperb44a315fec16\Psr\Log;

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
    public function setLogger(\_PhpScoperb44a315fec16\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
