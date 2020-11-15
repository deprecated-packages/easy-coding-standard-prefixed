<?php

namespace _PhpScoper21763e6c7ac4\Psr\Log;

/**
 * Describes a logger-aware instance
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface $logger
     * @return null
     */
    public function setLogger(\_PhpScoper21763e6c7ac4\Psr\Log\LoggerInterface $logger);
}
