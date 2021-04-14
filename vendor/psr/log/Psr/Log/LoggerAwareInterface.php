<?php

namespace _PhpScoper7b319b4d8e1c\Psr\Log;

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
    public function setLogger(\_PhpScoper7b319b4d8e1c\Psr\Log\LoggerInterface $logger);
}
