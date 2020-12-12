<?php

namespace _PhpScoperef870243cfdb\Psr\Log;

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
    public function setLogger(\_PhpScoperef870243cfdb\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
