<?php

namespace _PhpScoperca8ca183ac38\Psr\Log;

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
    public function setLogger(\_PhpScoperca8ca183ac38\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
