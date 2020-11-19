<?php

namespace _PhpScoper63567e560066\Psr\Log;

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
    public function setLogger(\_PhpScoper63567e560066\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
