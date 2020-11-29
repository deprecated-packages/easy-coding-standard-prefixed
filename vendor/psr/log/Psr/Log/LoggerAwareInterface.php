<?php

namespace _PhpScoper9d73a84b09ad\Psr\Log;

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
    public function setLogger(\_PhpScoper9d73a84b09ad\Psr\Log\LoggerInterface $logger);
}
