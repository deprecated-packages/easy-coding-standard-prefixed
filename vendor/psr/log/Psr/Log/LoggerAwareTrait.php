<?php

namespace _PhpScoperc75fd40d7a6e\Psr\Log;

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
    public function setLogger(\_PhpScoperc75fd40d7a6e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
