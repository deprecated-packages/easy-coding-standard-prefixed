<?php

namespace _PhpScoper17bb67c99ade\Psr\Log;

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
    public function setLogger(\_PhpScoper17bb67c99ade\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
