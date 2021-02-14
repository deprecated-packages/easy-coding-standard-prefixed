<?php

namespace _PhpScoperf361a7d70552\Psr\Log;

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
    public function setLogger(\_PhpScoperf361a7d70552\Psr\Log\LoggerInterface $logger);
}
