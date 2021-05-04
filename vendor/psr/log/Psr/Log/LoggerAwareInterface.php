<?php

namespace _PhpScoper653866602a9e\Psr\Log;

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
    public function setLogger(\_PhpScoper653866602a9e\Psr\Log\LoggerInterface $logger);
}
