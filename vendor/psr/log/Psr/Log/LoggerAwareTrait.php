<?php

namespace _PhpScoper3b1d73f28e67\Psr\Log;

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
    public function setLogger(\_PhpScoper3b1d73f28e67\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
