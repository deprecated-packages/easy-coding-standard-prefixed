<?php

namespace _PhpScoper9f8d5dcff860\Psr\Log;

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
    public function setLogger(\_PhpScoper9f8d5dcff860\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
