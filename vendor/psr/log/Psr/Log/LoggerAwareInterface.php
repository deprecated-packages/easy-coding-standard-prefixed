<?php

namespace _PhpScoperd74b3ed28382\Psr\Log;

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
    public function setLogger(\_PhpScoperd74b3ed28382\Psr\Log\LoggerInterface $logger);
}
