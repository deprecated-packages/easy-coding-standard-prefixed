<?php

namespace _PhpScoper356bfb655d08\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScoper356bfb655d08\Psr\Log\LoggerInterface $logger);
}
