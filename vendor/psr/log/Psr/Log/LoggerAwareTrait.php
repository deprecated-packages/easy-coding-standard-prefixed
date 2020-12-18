<?php

namespace _PhpScoper4d3fa30a680b\Psr\Log;

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
    public function setLogger(\_PhpScoper4d3fa30a680b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
