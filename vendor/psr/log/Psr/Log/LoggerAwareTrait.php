<?php

namespace _PhpScoper85e989d55df2\Psr\Log;

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
    public function setLogger(\_PhpScoper85e989d55df2\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
