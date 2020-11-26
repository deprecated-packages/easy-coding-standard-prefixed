<?php

namespace _PhpScoper4a718ec9156e\Psr\Log;

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
    public function setLogger(\_PhpScoper4a718ec9156e\Psr\Log\LoggerInterface $logger);
}
