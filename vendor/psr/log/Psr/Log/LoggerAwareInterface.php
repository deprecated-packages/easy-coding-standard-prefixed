<?php

namespace _PhpScoper68a3a2539032\Psr\Log;

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
    public function setLogger(\_PhpScoper68a3a2539032\Psr\Log\LoggerInterface $logger);
}
