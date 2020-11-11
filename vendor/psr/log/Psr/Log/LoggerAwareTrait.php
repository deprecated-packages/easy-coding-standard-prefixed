<?php

namespace _PhpScoper2fe14d6302bc\Psr\Log;

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
    public function setLogger(\_PhpScoper2fe14d6302bc\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
