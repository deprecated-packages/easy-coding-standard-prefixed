<?php

namespace _PhpScoper08748c77fa1c\Psr\Log;

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
    public function setLogger(\_PhpScoper08748c77fa1c\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
