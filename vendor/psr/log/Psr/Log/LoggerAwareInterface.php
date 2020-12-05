<?php

namespace _PhpScoper59ccd3f8e121\Psr\Log;

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
    public function setLogger(\_PhpScoper59ccd3f8e121\Psr\Log\LoggerInterface $logger);
}
