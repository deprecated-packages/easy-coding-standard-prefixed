<?php

namespace _PhpScoper2b44cb0c30af\Psr\Log;

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
    public function setLogger(\_PhpScoper2b44cb0c30af\Psr\Log\LoggerInterface $logger);
}
