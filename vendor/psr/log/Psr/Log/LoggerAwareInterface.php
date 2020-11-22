<?php

namespace _PhpScoperfacc742d2745\Psr\Log;

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
    public function setLogger(\_PhpScoperfacc742d2745\Psr\Log\LoggerInterface $logger);
}
