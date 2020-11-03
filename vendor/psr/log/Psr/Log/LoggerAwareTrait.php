<?php

namespace _PhpScoper5928e324b45e\Psr\Log;

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
    public function setLogger(\_PhpScoper5928e324b45e\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
