<?php

namespace _PhpScoper9e3283ae8193\Psr\Log;

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
    public function setLogger(\_PhpScoper9e3283ae8193\Psr\Log\LoggerInterface $logger);
}
