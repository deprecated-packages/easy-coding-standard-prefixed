<?php

namespace _PhpScoper64ca614e27fd\Psr\Log;

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
    public function setLogger(\_PhpScoper64ca614e27fd\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
