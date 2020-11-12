<?php

namespace _PhpScoper7cef7256eba6\Psr\Log;

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
    public function setLogger(\_PhpScoper7cef7256eba6\Psr\Log\LoggerInterface $logger);
}
