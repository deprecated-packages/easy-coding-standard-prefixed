<?php

namespace _PhpScoper528afa732cbd\Psr\Log;

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
    public function setLogger(\_PhpScoper528afa732cbd\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
