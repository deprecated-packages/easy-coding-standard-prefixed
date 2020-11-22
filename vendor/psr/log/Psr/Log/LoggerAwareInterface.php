<?php

namespace _PhpScoper3fa05b4669af\Psr\Log;

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
    public function setLogger(\_PhpScoper3fa05b4669af\Psr\Log\LoggerInterface $logger);
}
