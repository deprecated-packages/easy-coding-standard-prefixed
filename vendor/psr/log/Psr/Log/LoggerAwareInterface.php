<?php

namespace _PhpScoper255a4eaff575\Psr\Log;

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
    public function setLogger(\_PhpScoper255a4eaff575\Psr\Log\LoggerInterface $logger);
}
