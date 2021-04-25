<?php

namespace _PhpScoperd232d3743ab9\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoperd232d3743ab9\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
