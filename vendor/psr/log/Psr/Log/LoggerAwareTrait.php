<?php

namespace _PhpScoper833c56a97273\Psr\Log;

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
    public function setLogger(\_PhpScoper833c56a97273\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
