<?php

namespace _PhpScoper1ed8518cf1bf\Psr\Log;

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
    public function setLogger(\_PhpScoper1ed8518cf1bf\Psr\Log\LoggerInterface $logger);
}
