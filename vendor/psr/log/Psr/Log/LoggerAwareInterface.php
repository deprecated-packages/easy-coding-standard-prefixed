<?php

namespace _PhpScoper64a921a5401b\Psr\Log;

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
    public function setLogger(\_PhpScoper64a921a5401b\Psr\Log\LoggerInterface $logger);
}
