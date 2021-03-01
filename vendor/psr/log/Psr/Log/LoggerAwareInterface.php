<?php

namespace _PhpScoper06c5fb6c14ed\Psr\Log;

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
    public function setLogger(\_PhpScoper06c5fb6c14ed\Psr\Log\LoggerInterface $logger);
}
