<?php

namespace _PhpScoper6224e3b16fcc\Psr\Log;

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
    public function setLogger(\_PhpScoper6224e3b16fcc\Psr\Log\LoggerInterface $logger);
}
