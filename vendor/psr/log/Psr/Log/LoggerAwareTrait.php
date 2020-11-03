<?php

namespace _PhpScoper3d04c8135695\Psr\Log;

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
    public function setLogger(\_PhpScoper3d04c8135695\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
