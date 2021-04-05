<?php

namespace _PhpScoperf6b7f9bf122d\Psr\Log;

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
    public function setLogger(\_PhpScoperf6b7f9bf122d\Psr\Log\LoggerInterface $logger);
}
