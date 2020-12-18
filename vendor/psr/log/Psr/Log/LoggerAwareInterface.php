<?php

namespace _PhpScoperd8b12759ee0d\Psr\Log;

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
    public function setLogger(\_PhpScoperd8b12759ee0d\Psr\Log\LoggerInterface $logger);
}
