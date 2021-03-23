<?php

namespace _PhpScoper8ca6426d4e0c\Psr\Log;

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
    public function setLogger(\_PhpScoper8ca6426d4e0c\Psr\Log\LoggerInterface $logger);
}
