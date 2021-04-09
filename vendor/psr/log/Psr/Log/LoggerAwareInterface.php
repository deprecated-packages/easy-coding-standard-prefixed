<?php

namespace _PhpScoper3a0e32c9d767\Psr\Log;

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
    public function setLogger(\_PhpScoper3a0e32c9d767\Psr\Log\LoggerInterface $logger);
}
