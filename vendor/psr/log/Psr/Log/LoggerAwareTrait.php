<?php

namespace _PhpScoperb383f16e851e\Psr\Log;

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
    public function setLogger(\_PhpScoperb383f16e851e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
