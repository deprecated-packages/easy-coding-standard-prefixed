<?php

namespace _PhpScoper27cac5a8b4ab\Psr\Log;

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
    public function setLogger(\_PhpScoper27cac5a8b4ab\Psr\Log\LoggerInterface $logger);
}
