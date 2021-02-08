<?php

namespace _PhpScoper326af2119eba\Psr\Log;

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
    public function setLogger(\_PhpScoper326af2119eba\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
