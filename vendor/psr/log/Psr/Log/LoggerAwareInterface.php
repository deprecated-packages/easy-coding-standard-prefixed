<?php

namespace _PhpScoper79449c4e744b\Psr\Log;

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
    public function setLogger(\_PhpScoper79449c4e744b\Psr\Log\LoggerInterface $logger);
}
