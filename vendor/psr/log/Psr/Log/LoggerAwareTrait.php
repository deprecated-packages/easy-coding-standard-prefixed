<?php

namespace _PhpScoper59da9ac954a6\Psr\Log;

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
    public function setLogger(\_PhpScoper59da9ac954a6\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
