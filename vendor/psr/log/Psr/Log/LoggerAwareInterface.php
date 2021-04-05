<?php

namespace _PhpScoper6b644dbe715d\Psr\Log;

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
    public function setLogger(\_PhpScoper6b644dbe715d\Psr\Log\LoggerInterface $logger);
}
